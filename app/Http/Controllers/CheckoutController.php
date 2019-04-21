<?php
namespace App\Http\Controllers;

use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{


    public function shipping()
    {
        return view('front.shippingInfo');
    }
    public function payment()
    {
        return view('front.payment');
    }
    
    public function storePayment(Request $request){
      

        // \Stripe\Stripe::setApiKey("sk_test_tinIVAINWh93e0UN7lUCLAah");
      
        // $token = $request->stripeToken;

        // try {
        //     $charge = \Stripe\Charge::create(array(
        //         "amount" => Cart::total()*100,
        //         "currency" => "usd",
        //         "source" => $token,
        //         "description" => "Example charge"
        //     ));
        // } catch (\Stripe\Error\Card $e) {
        //     // The card has been declined
        // }

        Order::createOrder();
        return "Order complete";
       
    }
    
}


