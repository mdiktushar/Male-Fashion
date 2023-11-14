<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $request)
    {
        // Retrieve flashed input data from session
        $orderData = $request->session()->get('orderData');

        // Check if the data is available
        if (!$orderData) {
            // Handle the case where data is not available
            // You might want to redirect the user back to the order form or handle it accordingly
            return redirect()->back();
        }

        // Pass the data to the view
        return view('pages.user.stripe', ['orderData' => $orderData]);
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            Stripe\Charge::create([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com."
            ]);
            session()->flash('success', 'Payment successful!');
        } catch (Exception $e) {
            session()->flash('error', 'Card Decline');
        }
        return back();
    }
}
