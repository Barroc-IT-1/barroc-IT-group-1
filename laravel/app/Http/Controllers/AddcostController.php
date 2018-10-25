<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Customer;
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
        DB::Table('customers')->insert([
            'name'=> $request->name,
            'last_name'=> $request->lastname,
            'address'=> $request->address,
            'zipcode'=> $request->zipcode,
            'residence'=> $request->residence,
            'tel_number'=> $request->telnumber,
            'fax_number'=> $request->faxnumber,
            'email'=> $request->email,
            'company'=> $request->company,

        ]);

        return redirect('addcost');
    }
    public function update(request $request, $id)
    {


    }



}
