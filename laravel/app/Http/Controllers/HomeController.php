<?php

namespace App\Http\Controllers;

use App\Finance;
use App\Sales;
use Illuminate\Http\Request;
use \App\Customer;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customer=Customer::all();
        return view('home')
            ->with('customer', $customer);
    }
    public function sales(Request $req){
        return redirect()->route('sales');
    }


    public function finance (Request $req){
        return redirect()->route('finance');
    }
}
