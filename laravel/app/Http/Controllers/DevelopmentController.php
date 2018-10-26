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

        $customer= Development::find($id);
        $customer->maintanance_contract=$request->input('maintanancecontract');
        $customer->open_projects=$request->input('openprojects');
        $customer->applications=$request->input('applications');
        $customer->hardware=$request->input('hardware');
        $customer->operating_system=$request->input('operatingsystem');
        $customer->appointments=$request->input('appointments');
        $customer->internal_contact_person=$request->input('internalcp');
        $customer->customer_id=$request->input('customerid');
        $customer->save();

        return redirect('sales');
    }
}
