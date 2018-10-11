<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Finance;

class FinanceController extends Controller
{
    public function index()
    {
        $finance=Finance::all();
        return view('finance\index')
            ->with('finance', $finance);
    }
}
