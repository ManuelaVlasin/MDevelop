<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{
    public function index()
    {
        $user = User::first();
        return view('index_payment', [
            'intent' => $user->createSetupIntent(),
        ]);
    }

    public function singleCharge(Request $request)
    {
        $amount = $request->amount;
        $amount = $amount * 100;
        $paymentMethod = $request->payment_method;

        $user = User::first();
        $user->createOrGetStripeCustomer();
        dd($paymentMethod);
        $paymentMethod = $user->addPaymentMethod($paymentMethod);
        $user->charge($amount, $paymentMethod->id);

        return to_route('home');
    }
}
