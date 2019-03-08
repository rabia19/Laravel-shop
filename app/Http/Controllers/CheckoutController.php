<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function check1()//step1
    {
        if(Auth::check()){
            return redirect()->route('checkout.shipping');
        }
        
        return redirect('login');
    }

    public function shipping()
    {
        return view('front.shippingInfo');
    }
}


