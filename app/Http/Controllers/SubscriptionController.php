<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;
use App\Models\User;
use Exception;
use http\Exception\BadQueryStringException;
use Illuminate\Http\Request;
use Laravel\Cashier\Subscription;
use Stripe\Plan;
use Stripe\Stripe;

class SubscriptionController extends Controller
{
    public function showPlanForm()
    {
        return view('subscription_plans');
    }

    public function savePlan(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $amount = $request->amount * 100;
        try {

            $plan = Plan::create([
                'amount' => $amount,
                'currency' => $request->currency,
                'interval' => $request->billing_period,
                'interval_count' => $request->interval_count,
                'product' => [
                    'name' => $request->name
                ]
            ]);

            SubscriptionPlan::create([
                'plan_id' => $plan->id,
                'name' => $request->name,
                'price' => $plan->amount,
                'billing_method' => $plan->interval,
                'currency' => $plan->currency,
                'interval_count' => $plan->interval_count,
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }


        return 'successs';
    }

    public function allPlans()
    {
        $basic = SubscriptionPlan::where('name', 'basic')->first();
        $professional = SubscriptionPlan::where('name', 'professional')->first();
        $enterprise = SubscriptionPlan::where('name', 'enterprise')->first();
        return view('plans', compact('basic', 'professional', 'enterprise'));
    }

    public function checkout($planId)
    {
        $user = User::first();
        $plan = SubscriptionPlan::where('plan_id', $planId)->first();
        if (!$planId) {
            return back()->withErrors([
                'message' => 'Unable to locate the plan'
            ]);
        }
        return view('index_payment', [
            'plan' => $plan,
            'intent' => $user->createSetupIntent(),
        ]);
    }

    public function processPlan(Request $request)
    {
        $user = User::first();
        $user->createOrGetStripeCustomer();
        $paymentMethod = null;
        $paymentMethod = $request->payment_method;
        if ($paymentMethod) {
            $paymentMethod = $user->addPaymentMethod($paymentMethod);
        }

        $plan = $request->plan_id;
        try {
            $user->newSubscription(
                'default', $plan
            )->create($paymentMethod != null ? $paymentMethod->id : '');
        } catch (Exception $e) {
            return back()->withErrors([
                'error' => 'Unable to create subscription due to this issue ' . $e->getMessage()
            ]);
        }

        $request->session()->flash('alert-success', 'You are subscribed to this plan');

        return to_route('plans.checkout', $plan->plan_id);
    }

    public function allSubscriptions()
    {
        $loggedUser = User::first()->id;
        $subscriptions = Subscription::where('user_id', $loggedUser)->get();
        return view('subscriptions-index', compact('subscriptions'));
    }

    public function cancelSubscriptions(Request $request)
    {
        $subscriptionName = $request->subscriptionName;
        if ($subscriptionName) {
            $loggedUser = User::first();
            $loggedUser->subscription($subscriptionName)->cancel();
            return "Your Subscription is canceled";
        }
    }

    public function resumeSubscriptions(Request $request)
    {
        $loggedUser = User::first();
        $subscriptionName = $request->subscriptionName;
        if ($subscriptionName) {
            $loggedUser->subscription($subscriptionName)->resume();
            return "Your Subscription is resumed";
        }
    }
}
