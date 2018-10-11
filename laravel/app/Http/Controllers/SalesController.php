<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Sales;

class SalesController extends Controller
{

    public function index()
    {
        $customers = \App\Customer::all();
        return view('sales\index')
            ->with('customers', $customers);
    }
    public function search(request $request)
    {
        $customers = \App\Customer::all()->where('name', $request->search);
        if (empty($customers)){
            echo 'test';
        }
        return view('sales\index')
            ->with('customers', $customers);
    }




}
