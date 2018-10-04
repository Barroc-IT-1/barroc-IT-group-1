<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddcostController extends Controller
{
    public function create()
    {
        if(!Auth::user()->Check(1))return redirect()->action('\App\Http\Controllers\Auth\LoginController@showLoginForm');
        return view('sales.index');
    }

    public function insert(request $request)
    {
        $this->validate($request, [
            'Name' => 'required|string|min:6',
            'Phonenumber' => 'required|integer|min:8',
            'City'  => 'required|string|min:3',
            'Street'  => 'required|string|min:3',
            'housenumber'  => 'required|string|min:1',
            'bankaccount'  => 'required|string|min:10',
        ]);

        $custormer = new \App\model\Customer();
        $custormer->name = $request->Name;
        $custormer->last_name        = $request->Phonenumber;
        $custormer->address            = $request->City;
        $custormer->zipcode          = $request->Street;
        $custormer->residence        = $request->housenumber;
        $custormer->tel_number     = $request->bankaccount;
        $custormer->fax_number        = 'F';
        $custormer->email =
        $custormer->company =
        $custormer->customer_number    =
        $custormer->created_at      = now();
        $custormer->save();

        return redirect('addcost/index');
    }
}
