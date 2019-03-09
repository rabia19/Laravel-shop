<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller {
  public function postSignup(Request $request) {
    $this->validate($request, [
      'email' => 'required|unique:users|email|max:255',
      'username' => 'required|unique:users|alpha_dash|max:20',
      'password' => 'required|min:6',
    ]);

    User::create([
      'email' => $request->input('email'),
      'username' => $request->input('username'),
      'password' => bcrypt($request->input('password')),
    ]);
    return redirect()->route('home');
  }

  public function postSignin(Request $request) {
    $this->validate($request, [
      'email' => 'required',
      'password' => 'required',
    ]);
    if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
      return redirect()->back();
    }
    return redirect()->route('home');
  }
  public function getSignout() {
    Auth::logout();
    return redirect()->route('home');
  }
}