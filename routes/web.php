<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','FrontController@index')->name('home');
Route::get('/products','FrontController@products')->name('products');
Route::get('/product','FrontController@product')->name('product');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/cart', 'CartController');


Route::group(['prefix' => 'admin','middleware'=> ['auth','admin']], function(){
    Route::post('toggledeliver/[orderId]','OrderController@toggledeliver')->name('toggle.deliver');

    Route::get('/',function(){
        return view('admin.index');
    })->name('admin.index');

   Route::resource('item','ItemsController');
   Route::resource('category','CategoriesController');

   Route::get('orders/{type?}', 'OrderController@Orders');
   

});


Route::resource('address','AddressController');

//Route::get('checkout','CheckoutController@check1');

Route::group(['middleware' => 'auth'], function (){
    Route::get('shippingInfo','CheckoutController@shipping')->name('checkout.shipping');
});

Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');
