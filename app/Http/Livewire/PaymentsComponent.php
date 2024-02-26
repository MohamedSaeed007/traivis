<?php

namespace App\Http\Livewire;

use App\Achievements\GotStudents;
use App\Achievements\GotUsdCoursesIncome;
use App\Models\Business;
use App\Models\Course;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use App\Models\Plan;
use App\Models\Transaction;
use App\Models\User;

class PaymentsComponent extends Component
{
    public $user = null;
    public $business = null;
    public $open = 0;
    public $showTransactionModal = 0;
    public $payments;
    public $available_balance;
    public $on_hold_balance;
    public $total_refunded;
    public $total_earnings;
    public $courses_income;
    public $karma_income;
    public $withdraw_amount;
    public $influencer_income;
    public $total_payouts;
    public $total_withdrawals;
    public $purchased_courses;
    public $transactionId;
    public $completed_withdrawals;
    public $pending_withdrawals;
    public $paypal_email;
    public $payout_method;
    public $total_balance;
    public $stripe_account_status;
    public $search = '';
    public $date_from = '';
    public $date_to = '';
    public $from_price = '';
    public $to_price = '';
    public $sort_by = '';

    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'date_from' => [
            'except' => '',
        ],
        'date_to' => [
            'except' => '',
        ],
        'from_price' => [
            'except' => '',
        ],
        'to_price' => [
            'except' => '',
        ],
        'sort_by' => [
            'except' => '',
        ],
    ];

    public function mount()
    {
        $this->user = auth()->user();
        $this->business = $this->user->businesses->first();
        $this->paypal_email = $this->user->paypal_email;
        $this->stripe_account_status = $this->user->stripe_account_status;
    }
    public function addPaypalEmail()
    {
        $this->user->update(['paypal_email' => $this->paypal_email]);
    }
    public function addStripeAccount()
    {
        return redirect(route('stripe.account.create'));
    }
    public function withdrawRequest()
    {
        $this->validate([
            'withdraw_amount' => 'required|numeric',
            'payout_method' => 'required',
        ]);
        if ($this->user->balance >= $this->withdraw_amount) {
            $commission = $this->withdraw_amount * config('options.withdrawal_traivis_commission') / 100;
            Transaction::create([
                'payment_method' => $this->payout_method == 'stripe' ? 1 : 2,
                'payeeable_type' => User::class,
                'payeeable_id' => $this->user->id,
                'product_price' => $this->withdraw_amount,
                'transaction_type' => 2,
                'transaction_status' => 1,
                'traivis_commission' => $commission,
                'withdraw_request_data' => $this->payout_method == 'stripe' ? ['stripe_account_id' => $this->user->stripe_account_id] : ['paypal_email' => $this->paypal_email],
            ]);
            $this->user->increment('pending_withdrawal', $this->withdraw_amount);
            $this->user->decrement('balance', $this->withdraw_amount);
            session()->flash('success', 'Your Withdraw request sent successfully');
        } else {
            session()->flash('error', "You don't have enough balance");
        }
    }

    public function refund()
    {
        $transaction = Transaction::find($this->transactionId);
        // dd(-($transaction->final_amount * 100));
        if ($transaction->is_refundable == 1) {
            $transaction->update([
                'transaction_status' => 3,
                'is_refundable' => 0
            ]);
            $this->user->courses()->detach($transaction->productable->id);
            $maker = $transaction->productable->maker;
            $maker->removeProgress(new GotStudents(), 1);
            $maker->removeProgress(new GotUsdCoursesIncome(), $transaction->final_amount * 100);
        }
    }
    public function render()
    {
        $this->payments = Transaction::where(function ($q) {
            $q->whereMorphRelation('payeeable', User::class, 'id', $this->user->id)
                ->orWhereMorphRelation('payerable', User::class, 'id', $this->user->id)
                ->when($this->business, function ($q) {
                    $q->orWhereMorphRelation('payeeable', Business::class, 'id', $this->business->id)
                        ->orWhereMorphRelation('payerable', Business::class, 'id', $this->business->id);
                })
                ->orWhere('influencer_id', $this->user->id)
                ->orWhere('karma_id', $this->user->id);
        })->when($this->search, function ($q) {
            $q->where(function ($q) {
                $q->whereMorphRelation('payeeable', Business::class, 'business_name', 'like', '%' . $this->search . '%')
                    ->orWhereMorphRelation('payeeable', User::class, 'name', 'like', '%' . $this->search . '%')
                    ->orWhereMorphRelation('payerable', Business::class, 'business_name', 'like', '%' . $this->search . '%')
                    ->orWhereMorphRelation('payerable', User::class, 'name', 'like', '%' . $this->search . '%')
                    ->orWhereHasMorph('productable', Course::class, function (Builder $query) {
                        $query->whereRelation('courseDetails', 'title', 'like', '%' . $this->search . '%');
                    });
            });
        })->get()->map(function ($transaction) {
            if ($transaction->transaction_type == 2) {
                $transaction->transaction_type = 'Withdrawal';
            } else {
                if (
                    $transaction->payerable?->id == $this->user->id || $transaction->payerable?->id ==
                    $this->business?->id
                ) {
                    $transaction->transaction_type = 'Spending';
                }
                if (
                    $transaction->payeeable->id == $this->user->id || $transaction->payeeable->id ==
                    $this->business?->id
                ) {
                    $transaction->transaction_type = 'Income';
                    $transaction->earning_amount = $transaction->final_amount;
                }
                if ($transaction->influencer_id == $this->user->id || $transaction->karma_id == $this->user->id) {
                    $transaction->transaction_type = 'Earning';
                    $transaction->earning_amount = $transaction->mkt_commission -
                        $transaction->traivis_commission_from_mkt;
                }
            }
            return $transaction;
        });
        $this->courses_income = $this->payments->where('transaction_status', '!=', 3)->where('transaction_type', 'Income')->sum('earning_amount');
        $this->karma_income = $this->payments->whereNotNull('karma_id')->where('transaction_status', '!=', 3)->where('transaction_type', 'Earning')->sum('earning_amount');
        $this->influencer_income = $this->payments->whereNotNull('influencer_id')->where('transaction_status', '!=', 3)->where('transaction_type', 'Earning')->sum('earning_amount');
        $this->total_earnings = $this->courses_income + $this->karma_income + $this->influencer_income;
        $this->available_balance = $this->user->balance;
        $this->on_hold_balance = $this->user->hold_balance;
        $this->total_balance = $this->user->balance + $this->user->hold_balance;
        $this->completed_withdrawals = $this->payments->where('transaction_status', 2)->where('transaction_type', 'Withdrawal')->sum('product_price');
        $this->pending_withdrawals = $this->payments->where('transaction_status', 1)->where('transaction_type', 'Withdrawal')->sum('product_price');
        $this->purchased_courses = $this->payments->where('transaction_status', '!=', 3)->where('transaction_type', 'Spending')->sum('amount_after_discount');
        return view('livewire.payments-component');
    }
}
