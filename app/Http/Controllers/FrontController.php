<?php

namespace App\Http\Controllers;
use App\Item;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function index()
    {
        $products=Item::all();

        return view('front.home',compact('products'));
    }

    public function products()
    {
        $products=Item::all();
        return view('front.products',compact('products'));
    }

    public function product(Item $product)
    {

        return view('front.product',compact('item'));
    }
}