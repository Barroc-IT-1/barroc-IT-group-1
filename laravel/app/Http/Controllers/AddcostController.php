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
            'name' => $request->name,
            'last_name' => $request->lastname,
            'address' => $request->address,
            'zipcode' => $request->zipcode,
            'residence' => $request->residence,
            'tel_number' => $request->telnumber,
            'fax_number' => $request->faxnumber,
            'email' => $request->email,
            'company' => $request->company,

        ]);
    }
    public function destroy($id)
    {
        DB::table('customers')->where('id', $id)->delete();

        return redirect('sales');
    }
    public function edit($id)
    {
        return view('sales\edit')
            ->with('id', $id);
    }
    public function update($id, request $request)
    {
        $customer= Customer::find($id);
        $customer->name=$request->input('name');
        $customer->last_name=$request->input('lastname');
        $customer->address=$request->input('address');
        $customer->zipcode=$request->input('zipcode');
        $customer->residence=$request->input('residence');
        $customer->tel_number=$request->input('telnumber');
        $customer->fax_number=$request->input('faxnumber');
        $customer->email=$request->input('email');
        $customer->company=$request->input('company');
        $customer->save();

        return redirect('sales');
    }
}

