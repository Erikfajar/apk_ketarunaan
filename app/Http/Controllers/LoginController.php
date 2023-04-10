<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/beranda');
        }
        return redirect('/eror');
    }
    public function logout (){
        Auth::logout();
        return redirect('/');
     }
}
