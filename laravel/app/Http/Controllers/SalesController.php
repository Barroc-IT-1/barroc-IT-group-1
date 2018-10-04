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
        $sales=Sales::all();
        return view('sales\index')
            ->with('sales', $sales);
    }


}
