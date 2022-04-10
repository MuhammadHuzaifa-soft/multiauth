<?php

namespace App\Http\Controllers\Auth;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
     public function welcome(){
     return view('vendor.welcome');
     }
     public function loginForm(){
     return view('vendor.loginForm');
     }
       public function registrationForm(){
       return view('vendor.vendorRegistration');
       }

    public function vendorRegistration(VendorRequest $request){
        $validated = $request->validated();

    return Vendor::create([
    'name' => $request->name,
    'email' => $request->email,
    'password' => Hash::make($request->password),
    ]);
    //   $request->session()->regenerate();

      return redirect()->intended('/vendor');
    }

      public function login(Request $request)
      {
    //   dd($request);
      $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
      ]);
    //   dd(Auth::guard('vendor')->attempt($credentials));
      if (Auth::guard('vendor')->attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->intended('vendor/dashboard');
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
      Auth::guard('vendor')->logout();

    //   $request->session()->invalidate();

    //   $request->session()->regenerateToken();

      return redirect('/vendor');
      }
}