<?php

namespace App\Http\Controllers;

use App\Finance;
use App\Sales;
use Illuminate\Http\Request;
use \App\Customer;

class HomeController extends Controller
{
    public function index()
    {
        $customer=Customer::all();
        return view('home')
            ->with('customer', $customer);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
