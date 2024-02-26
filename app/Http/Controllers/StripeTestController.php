<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeTestController extends Controller
{
    public function purchase(Request $request)
    {
        $user = $request->user();
        $paymentMethod = $request->input('payment_method');
        try {
            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethod);
            $user->charge(125, $paymentMethod);
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
        return back()->with('message', 'successful Payment!');
    }
}