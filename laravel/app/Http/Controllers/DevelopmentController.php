<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Development;

class DevelopmentController extends Controller
{
    public function index()
    {
        $customers = \App\Customer::all();
        $sales = \App\Sales::all();
        $development = \App\Development::all();

        return view('development\index')
            ->with('customers', $customers)
            ->with('sales', $sales)
            ->with('development', $development);
    }
    public function search(request $request)
    {
        $customers = \App\Customer::all()->where('name', $request->search);
        return view('development\index')
            ->with('customers', $customers);

    }
}
