<?php

namespace App\Http\Controllers;

use App\Achievements\GotUsdCoursesIncome;
use App\Models\Course;
use App\Models\InfluencerOffer;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserKarmaShare;
use Illuminate\Http\Request;
use App\Events\OrderSuccess;
use App\Models\Business;
use App\Models\Cart;
use App\Models\Plan;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Stripe\StripeClient;

class PaymentController extends Controller
{
    public $cart;
    public function __construct()
    {

        $this->cart = Cache::get('user.' . auth()->user()->id . '.cart');
        parent::__construct();
    }

    /* public function index(Request $request)
    {
        $ids = $request->bulk_ids;

        //Update
        if ($request->bulk_action_btn === 'update_status' && $request->status && is_array($ids) && count($ids)) {
            // dd($request->bulk_action_btn, $request->status, $ids);
            foreach ($ids as $id) {
                $paymentStatus = Payment::find($id)->save_and_sync(['status' => $request->status]);
                // Notification section
                $enroll = CourseUser::where('payment_id', $id)->first();
                $courseId = $enroll->course_id;
                $course = Course::find($courseId);
                $user = $paymentStatus->user_id;

                if ($request->status != 'success') {
                    $notification = "Super Admin change status Your Purchased $course->title course status  $request->status";
                    $model = 'course-purchase-status-change';
                } else {
                    $notification = "Super Admin Successfully approved $course->title course. Continue learning";
                    $model = 'course-purchase-success';
                }

                $model_id = $id;
                $courses['name'] = $paymentStatus->name;
                $courses['status'] = $paymentStatus->status;
                $courses['course'] = $course->title;
                $courses['email'] = $paymentStatus->email;
                $courses['date'] = $paymentStatus->created_at->format('M d Y');
                $courses['time'] = $paymentStatus->created_at->format('h:i');

                userNotification($user, $notification, $model_id, $model);
                //    dd($courses['name']);
                Mail::to($courses['email'])->queue(new UserRegistrationMail('course-confirmation', $courses));
            }

            return back()->with('success', __a('bulk_action_success'));
        }
        //Delete
        if ($request->bulk_action_btn === 'delete' && is_array($ids) && count($ids)) {
            if (config('app.is_demo')) {
                return back()->with('error', __a('demo_restriction'));
            }

            foreach ($ids as $id) {
                Payment::find($id)->delete_and_sync();
            }

            return back()->with('success', __a('bulk_action_success'));
        }
        //END Bulk Actions

        $title = __a('payments');

        $payments = Payment::query();
        if ($request->q) {
            $payments = $payments->where(function ($q) use ($request) {
                $q->where('name', 'like', "%{$request->q}%")
                    ->orWhere('email', 'like', "%{$request->q}%");
            });
        }
        if ($request->filter_status) {
            $payments = $payments->where('status', $request->filter_status);
        }
        $payments = $payments->orderBy('id', 'desc')->paginate(20);

        return view('admin.payments.payments', compact('title', 'payments'));
    }
    public function view($id)
    {
    $title = __a('payment_details');
    $payment = Payment::find($id);
    return view('admin.payments.payment_view', compact('title', 'payment'));
    }
    public function delete($id)
    {
        if (config('app.is_demo')) {
            return back()->with('error', __a('demo_restriction'));
        }

        $payment = Payment::find($id);
        if ($payment) {
            $payment->delete_and_sync();
        }

        return back();
    }

    public function updateStatus(Request $request, $id)
    {
        $payment = Payment::find($id);
        if ($payment) {
            $payment->status = $request->status;
            $payment->save_and_sync();
        }

        return back()->with('success', __a('success'));
    }

    public function PaymentGateways()
    {
        $title = __a('payment_settings');

        return view('admin.payments.gateways.payment_gateways', compact('title'));
    }

    public function PaymentSettings()
    {
        $title = __a('payment_settings');

        return view('admin.payments.gateways.payment_settings', compact('title'));
    }

    public function thankYou()
    {
        $title = __t('payment_thank_you');

        return view(theme('payment-thank-you'), compact('title'));
    } */

    public function transactionInvoice(Transaction $transaction)
    {
        $forUser = 0;
        return view('pages.print_invoice', compact('transaction', 'forUser'));
    }

    public function orderInvoice(Order $order)
    {
        return view('pages.print_order_invoice', compact('order'));
    }

    public function transactionInvoiceForUser(Transaction $transaction)
    {
        $forUser = 1;
        return view('pages.print_invoice', compact('transaction', 'forUser'));
    }

    public function studentPayments()
    {
        return view('pages.student_payments');
    }
    public function checkoutPage($planId = null)
    {
        $businessId = session('business_id') ?? null;
        $plan = null;
        $cart = $this->cart;
        // dd($cart);
        if ($planId) {
            $plan = Plan::find($planId);
        } elseif ($this->cart) {
            if ($this->cart->items_count == 0) {
                return redirect()->back();
            }
            if ($this->cart->total == 0) {
                return redirect()->route('checkout.purchase_free');
            }
        }
        if (!$this->cart && !$planId) {
            return redirect()->back();
        }

        return view('homes.social.payment.checkout', compact(['plan']));
    }

    public function purchase(Request $request)
    {
        $user = $request->user();
        $paymentMethodForStripe = $request->input('payment_method_for_stripe');
        $paymentMethod = $request->input('payment_method');
        $plan = null;
        if ($paymentMethod == 3) {
            if ($user->balance < $this->cart->total) {
                session()->flash('error', "You don't have an enough balance");
                return redirect(route('checkout.page'));
            }
        }
        if ($request->planId) {
            $plan = Plan::find($request->planId);
            $total = $plan->price;
            try {
                //Create Order
                $order = Order::create([
                    'orderable_type' => User::class,
                    'orderable_id' => $user->id
                ]);
                //Create Transaction For Plan
                $transaction = Transaction::create([
                    'order_id' => $order->id,
                    'product_price' => $plan->price,
                    'payment_method' => $paymentMethod,
                    'productable_type' => Plan::class,
                    'productable_id' => $plan->id,
                    'payerable_type' => User::class,
                    'payerable_id' => $user->id
                ]);
                //Take Credit From Customer Card
                if ($paymentMethod == 1) {
                    $user->createOrGetStripeCustomer();
                    $user->updateDefaultPaymentMethod($paymentMethodForStripe);
                    $user->charge($total * 100, $paymentMethodForStripe);
                }
                //create business
                Business::updateOrCreate(
                    [
                        'user_id' => auth()->user()->id,
                        'business_type' => 'enterprise'
                    ],
                    [
                        'user_id' => auth()->user()->id,
                        'business_type' => 'enterprise',
                        'approved' => 0
                    ]
                );
                //Commit The Transaction
                DB::commit();
                session()->flash(
                    'success',
                    'Payment completed successfully , Please click on Enterprise to complete your space details'
                );
                //Event to send mail
                OrderSuccess::dispatch($order);
                //return back to complete enterprise business setup
                return redirect(route('business-space'));
            } catch (Exception $exception) {
                DB::rollback();
                session()->flash('error', $exception->getMessage());
                // session()->flash('error', 'An error occurred, please try again');
                return redirect(route('checkout.page'));
            }
        } else {
            if ($this->cart->items_count == 0) {
                session()->flash('error', 'Your cart has no items');
                return redirect(route('home'));
            }
            $total = $this->cart->total;
            DB::beginTransaction();
            try {
                //Create Order
                $order = Order::create([
                    'orderable_type' => User::class,
                    'orderable_id' => $user->id,
                    'promo_code_id' => optional($this->cart->promoCode)->id
                ]);
                //Create Transaction For Each Course
                foreach ($this->cart->items as $item) {
                    $this->singleCoursePurchase($item, $order, $user, $paymentMethod);
                }
                //Clear Cart
                $this->cart->clear();
                //Take Credit From Customer Card
                if ($paymentMethod == 1) {
                    $user->createOrGetStripeCustomer();
                    $user->updateDefaultPaymentMethod($paymentMethodForStripe);
                    $user->charge($total * 100, $paymentMethodForStripe);
                }
                if ($paymentMethod == 3) {
                    $user->decrement('balance', $total);
                }
                //Commit The Transaction
                DB::commit();
            } catch (Exception $exception) {
                DB::rollback();
                session()->flash('error', $exception->getMessage());
                // session()->flash('error', 'An error occurred, please try again');
                return redirect(route('checkout.page'));
            }
        }
        //Event to send mail
        OrderSuccess::dispatch($order);
        return redirect(route('checkout.success', $order));
    }

    public function purchaseFree()
    {
        $user = auth()->user();

        if ($this->cart->items_count == 0) {
            session()->flash('error', 'Your cart has no items');
            return redirect(route('home'));
        }

        DB::beginTransaction();
        try {
            $order = Order::create([
                'orderable_type' => User::class,
                'orderable_id' => $user->id
            ]);

            foreach ($this->cart->items as $item) {
                $transaction = Transaction::create([
                    'order_id' => $order->id,
                    'product_price' => $item->course->final_price,
                    'productable_type' => Course::class,
                    'productable_id' => $item->course->id,
                    'payerable_type' => User::class,
                    'payerable_id' => $user->id,
                    'payeeable_type' => Business::class,
                    'payeeable_id' => $item->course->business_id
                ]);
                //Enroll user to course
                do_enroll($user->id, $item->course->id, $transaction->id);
            }
            //Clear Cart
            $this->cart->clear();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            session()->flash('error', $exception->getMessage());
            // session()->flash('error', 'An error occurred, please try again');
            return redirect(route('checkout.page'));
        }
        OrderSuccess::dispatch($order);
        return redirect(route('checkout.success', $order));
    }

    public function stripeAccountLinkReturn()
    {
        $stripe = new StripeClient('sk_test_51M5sYBJwMzK7SbmndsDDNC9PZ7BwjD6WKkt07na1AXOU2OWud8VrioWjKtEQpX0sMImWEzf3yLbjatsOJrhpgtAR00ncaieqsA');
        $account = $stripe->accounts->retrieve(auth()->user()->stripe_account_id, []);
        if ($account->details_submitted) {
            auth()->user()->update(['stripe_account_status' => 1]);
            return redirect(route('student-payments'));
        } else {
            return 'failed';
        }
    }
    // public function stripeAccountLinkReauth()
    // {
    //     return redirect(route('stripe.account.create'));
    // }

    public function stripeCreateConnectedAccount()
    {
        $user = auth()->user();
        if (!$user->stripe_account_status) {
            $stripe = new StripeClient('sk_test_51M5sYBJwMzK7SbmndsDDNC9PZ7BwjD6WKkt07na1AXOU2OWud8VrioWjKtEQpX0sMImWEzf3yLbjatsOJrhpgtAR00ncaieqsA');
            $account = $stripe->accounts->create(['type' => 'express']);
            // dd($account->id);
            $accountLink = $stripe->accountLinks->create([
                'account' => $account->id,
                'refresh_url' => route('stripe.account.create'),
                'return_url' => route('stripe.account.return'),
                'type' => 'account_onboarding',
            ]);
            $user->update(['stripe_account_id' => $account->id]);
            return redirect($accountLink->url);
        }
    }

    public function stripeTransfer(Transaction $transaction)
    {
        \Stripe\Stripe::setApiKey('sk_test_51M5sYBJwMzK7SbmndsDDNC9PZ7BwjD6WKkt07na1AXOU2OWud8VrioWjKtEQpX0sMImWEzf3yLbjatsOJrhpgtAR00ncaieqsA');
        $transfer = \Stripe\Transfer::create([
            "amount" => $transaction->final_price * 100,
            "currency" => "GBP",
            "destination" => $transaction->withdraw_request_data['stripe_account_id'],
        ]);
        // dd($transfer['id']);
        if ($transfer['id']) {
            $transaction->payeeable->decrement('pending_withdrawal', $transaction->product_price);
        }
        return $transfer;
    }

    public function successPage(Order $order)
    {
        $order->load('transactions.productable.maker');
        $user = auth()->user();
        $businessId = session('business_id') ?? null;
        return view('homes.social.payment.success', compact('order'));
    }

    public function handlePaypalPayment(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.success.payment'),
                "cancel_url" => route('paypal.cancel.payment'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $this->cart->total
                    ]
                ]
            ]
        ]);
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return redirect()
                ->route('paypal.cancel.payment')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('checkout.page')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function paypalPaymentCancel()
    {
        return redirect()
            ->route('checkout.page')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }

    public function paypalPaymentSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $user = auth()->user();
            if ($this->cart->items_count == 0) {
                session()->flash('error', 'Your cart has no items');
                return redirect(route('home'));
            }
            $total = $this->cart->total;
            DB::beginTransaction();
            try {
                //Create Order
                $order = Order::create([
                    'orderable_type' => User::class,
                    'orderable_id' => $user->id,
                    'promo_code_id' => optional($this->cart->promoCode)->id
                ]);
                //Create Transaction For Each Course
                foreach ($this->cart->items as $item) {
                    $this->singleCoursePurchase($item, $order, $user, 2);
                }
                //Clear Cart
                $this->cart->clear();
                //Commit The Transaction
                DB::commit();
            } catch (Exception $exception) {
                DB::rollback();
                session()->flash('error', $exception->getMessage());
                // session()->flash('error', 'An error occurred, please try again');
                return redirect(route('checkout.page'));
            }
            //Event to send mail
            OrderSuccess::dispatch($order);
            return redirect(route('checkout.success', $order));
        } else {
            return redirect()
                ->route('checkout.page')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function singleCoursePurchase($item, $order, $user, $paymentMethod)
    {
        $userKarmaShare = null;
        $mktCommission = null;
        $acceptedOffer = null;
        $traivisCommissionFromInfluencer = null;
        if ($user->influencer_offer_id) {
            $acceptedOffer = InfluencerOffer::with('campaign')
                ->where('status', InfluencerOffer::STATUS['accepted'])
                ->where([
                    'user_id' => $user->id,
                    'course_id' => $item->course->id
                ])->first();
            $mktCommission = $acceptedOffer?->campaign->commission * $item->course->final_price / 100;
            $traivisCommissionFromInfluencer = $mktCommission * config('options.traivis_commission_from_influencer') / 100;
        } elseif ($user->user_karma_share_id) {
            $karmaShare = UserKarmaShare::find($user->user_karma_share_id);
            $mktCommission = config('options.karma_commission') * $item->course->final_price / 100;
        }
        $transaction = Transaction::create([
            'order_id' => $order->id,
            'payment_method' => $paymentMethod,
            'product_price' => $item->course->sale_price,
            'productable_type' => Course::class,
            'productable_id' => $item->course->id,
            'payerable_type' => User::class,
            'payerable_id' => $user->id,
            'payeeable_type' => Business::class,
            'payeeable_id' => $item->course->business_id,
            'is_refundable' => 1,
            'influencer_id' => $acceptedOffer?->user_id,
            'karma_id' => $user->user_karma_share_id ? $karmaShare->user->id : null,
            'mkt_commission' => $mktCommission,
            'traivis_commission_from_mkt' => $traivisCommissionFromInfluencer,
        ]);
        //Enroll user to course
        do_enroll($user->id, $item->course->id, $transaction->id);
        //Calculate Traivis Commission
        $transaction->calculateDiscount();
        $transaction->calculateTraivisCommission('course_fee_commission');
        //Increment Achievement Progress
        $item->course->maker->addProgress(new GotUsdCoursesIncome(), $transaction->final_amount * 100);

        // dd($item->course);

        //Update Hold Balance And Normal Balance (Old Logic)
        // $course = $transaction->productable;
        // $holdPercentage = null;
        // if (
        //     $course
        //         ->sections()
        //         ->where('section_type', 3)
        //         ->exists()
        // ) {
        //     $holdPercentage = 100;
        // } elseif (
        //     $course
        //         ->sections()
        //         ->where('section_type', 1)
        //         ->exists()
        // ) {
        //     $holdPercentage = 50;
        // } else {
        //     $holdPercentage = 0;
        // }
        // $coursePrice = $transaction->final_amount;
        // $holdBalance = ($coursePrice * $holdPercentage) / 100;
        // $transaction->payeeable()->increment('hold_balance', $holdBalance);
        // $transaction->payeeable()->increment('balance', $coursePrice - $holdBalance);
        // $transaction->update([
        //     'hold_balance' => $holdBalance
        // ]);

        // Update Instructor Hold Balance
        $transaction->payeeable->owner->increment('hold_balance', $transaction->final_amount);
        // Update Influencer Or Karma Hold Balance
        if ($transaction->influencer_id || $transaction->karma_id) {
            $transaction->karma->increment('hold_balance', $transaction->mkt_commission - $transaction->traivis_commission_from_mkt);
        }
    }
}
