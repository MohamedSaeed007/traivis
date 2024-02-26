<?php

namespace App\Http\Livewire;

use App\Events\OrderSuccess;
use App\Exceptions\CourseNotEnrollable;
use App\Models\Business;
use App\Models\Cart as ModelsCart;
use App\Models\Course;
use App\Models\Order;
use App\Models\PromoCode;
use App\Models\Transaction;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Cart extends Component
{
    public $checkoutButtonError = null;
    public $promoError = null;
    // public $cart;
    public $total;
    public $voucher;
    public $promoCode;
    public $openCart = 0;
    public $entityId;
    public $cartItems;
    protected $listeners = ['addToCartEmit' => 'addToCart', 'refresh' => '$refresh'];

    public function getCartProperty()
    {
        $cart = Cache::rememberForever('user.' . auth()->user()->id . '.cart', function () {
            return ModelsCart::firstOrCreate([
                'cartable_type' => User::class,
                'cartable_id' => auth()->user()->id,
            ]);
            // return auth()->user()->cart;
        });
        return $cart;
    }

    public function addToCart($courseId)
    {
        $user = auth()->user();
        //check if the user purchased the course before
        if (!$user->isEnrolled($courseId)) {
            $course = Course::find($courseId);
            //check if Free Course
            if ($course->final_price == 0) {
                DB::beginTransaction();
                try {
                    $order = Order::create([
                        'orderable_type' => User::class,
                        'orderable_id' => $user->id,
                    ]);
                    $transaction = Transaction::create([
                        'order_id' => $order->id,
                        'product_price' => $course->final_price,
                        'productable_type' => Course::class,
                        'productable_id' => $course->id,
                        'payerable_type' => User::class,
                        'payerable_id' => $user->id,
                        'payeeable_type' => Business::class,
                        'payeeable_id' => $course->business_id,
                    ]);
                    //Enroll user to course
                    if (!$course->isEnrollable()) {
                        throw new CourseNotEnrollable();
                    }
                    do_enroll($user->id, $course->id, $transaction->id);
                    DB::commit();
                } catch (Exception $exception) {
                    DB::rollback();
                    session()->flash('error', $exception->getMessage());
                    // session()->flash('error', 'An error occurred, please try again');
                    return redirect(route('checkout.page'));
                }
                OrderSuccess::dispatch($order);
                return redirect(route('course', $course->slug));
            }
            //paid courses
            $this->cart->items()->firstOrCreate(
                ['course_id' => $course->id]
            );
            $this->applyPromoCode();
            //open cart
            $this->openCart = 1;
        }
    }

    public function applyPromoCode()
    {
        $this->reset('promoError');
        $promoCode = PromoCode::whereCode($this->voucher)->first();
        $this->promoCode = $promoCode;
        $this->cart->promo_code_id = optional($promoCode)->id;
        $this->cart->save();
        if (!$promoCode) {
            if ($this->voucher) {
                $this->promoError = 'Promo Code Not Valid';
            }
            // return false;
        }
        return $this->emitSelf('refresh');
    }

    public function removeItem($itemId)
    {
        $this->cart
            ->items()
            ->whereId($itemId)
            ->delete();
        $this->applyPromoCode();
    }

    public function goToCheckOut()
    {
        //check if cart has items
        if ($this->cart->items_count > 0) {
            return redirect()->route('checkout.page');
        } else {
            $this->checkoutButtonError = 'Please add items to cart first';
        }
    }

    public function render()
    {
        return view('livewire.cart', [
            'cart' => $this->cart
        ]);
    }
}
