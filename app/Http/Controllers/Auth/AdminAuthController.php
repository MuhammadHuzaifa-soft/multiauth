<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function welcome(){
         return view('admin.welcome');
    }
    public function loginForm(){
         return view('admin.loginForm');
    }

    public function login(Request $request)
    {
        // dd($request);

   $credentials = $request->validate([
   'email' => ['required', 'email'],
   'password' => ['required'],
   ]);
// dd(Auth::guard('web')->attempt($credentials));
   if (Auth::guard('admin')->attempt($credentials , true)) {
   $request->session()->regenerate();

   return redirect()->intended('admin/dashboard');
   }else {
  dd('g');
   }


    }

    /**
    * Destroy an authenticated session.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\RedirectResponse
    */
    public function logout(Request $request)
    {
    Auth::guard('admin')->logout();

    // $request->session()->invalidate();

    // $request->session()->regenerateToken();

    return redirect('/admin');
    }

      public function userLogout(Request $request){
    //   dd('ds');
      Auth::guard('web')->logout();

    //   $request->session()->invalidate();

    //   $request->session()->regenerateToken();

      return redirect('/');
      }
}