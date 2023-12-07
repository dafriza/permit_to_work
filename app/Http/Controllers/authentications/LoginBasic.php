<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginBasic extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-login-basic');
  }

  public function postLogin(Request $request)
  {
    //dd($request->all());
    if (Auth::attempt($request->only('email', 'password'))){
      return redirect('/dashboard');
    }
    return redirect('/auth/login-basic');
  }

  public function logout(Request $request)
  {
    Auth::logout();
    return redirect('/auth/login-basic');
  }
}
