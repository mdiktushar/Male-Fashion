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

        $user = auth()->user();
        $carts = $user->carts()->get();

        $totalPrice = $carts->sum(function ($cart) {
            return $cart->quantity * $cart->product->price;
        });

        // Pass the data to the view
        return view('pages.user.stripe', ['orderData' => $orderData, 'totalPrice' => $totalPrice]);
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
                "amount" =>  $request->totalPrice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com."
            ]);

            $user = auth()->user();
            $carts = $user->carts()->get();

            $order = $user->orders()->create([
                'fullname' => $request->fullname,
                'address' => $request->address,
                'phone' => $request->phone,
                'status' => 'Paid',
            ]);

            $input = [];
            foreach ($carts as $cart) {
                $input['product_id'] = $cart->product_id;
                $input['quantity'] = $cart->quantity;
                $input['price'] = $cart->product()->first()->price;

                $order->orderItems()->create($input);

                $cart->delete();
            }
            session()->flash('success', 'Payment successful!');
            return redirect()->route('cartPage');
        } catch (Exception $e) {
            dd($e);
            session()->flash('error', 'Card Decline');
            return redirect()->route('cartPage');
        }
    }
}
