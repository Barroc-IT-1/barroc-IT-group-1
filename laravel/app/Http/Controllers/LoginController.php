<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use app\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(Request $request){

        //dd($request->all()) ;


        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))

        {
            $user = User::where('email' , $request->email)->first();


            if ($user-> is_admin())
            {
                return redirect()->route('dashboard');
            }

            if ($user-> is_sales())
            {
                return redirect()->route('sales');
            }
            if ($user-> is_finance())
            {
                return redirect()->route('finance');
            }
            if ($user-> is_development())
            {
                return redirect()->route('development');
            }

            return redirect()->route('home');
        }

        return redirect()->back();
    }
    //
}