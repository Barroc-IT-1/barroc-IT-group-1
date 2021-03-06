<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Sales;
use App\Customer;

class SalesController extends Controller
{

    public function index()
    {
        $customers = \App\Customer::all();
        $sales = \App\Sales::all();
        $development = \App\Development::all();

        return view('sales\index')
            ->with('customers', $customers)
            ->with('sales', $sales)
            ->with('development', $development);

    }

    public function search(request $request)
    {
        $customers = \App\Customer::all()->where('name', $request->search);
        return view('sales\index')
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

        $customer = Sales::find($id);
        $customer->offer_numbers = $request->input('offernumbers');
        $customer->offer_status = $request->input('offerstatus');
        $customer->prospect = $request->input('prospect');
        $customer->date_of_action = $request->input('dateofaction');
        $customer->last_contact_data = $request->input('lastcontactdata');
        $customer->next_action = $request->input('nextaction');
        $customer->sale_percentage = $request->input('salepercentage');
        $customer->creditworthy = $request->input('creditworthy');
        $customer->customer_id = $request->input('customerid');
        $customer->save();

        return redirect('sales');
    }
}








































    /*
    public function destroy($id)
    {
        DB::table('customers')->where('id', $id)->delete();

        return redirect('sales');
    }
    public function edit($id)
    {
        $customers = \App\Customer::find($id);

        $sales = \App\Sales::all();
        $development = \App\Development::all();

        // dd($customers);
        return view('sales\edit')
            ->with('id', $id)
            ->with('customers', $customers)
            ->with('sales', $sales)
            ->with('development', $development);
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
