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
        $customers = \App\Customer::all();
        $sales = \App\Sales::all();
        $development = \App\Development::all();

        return view('finance\index')
            ->with('customers', $customers)
            ->with('sales', $sales)
            ->with('development', $development);

    }
    public function search(request $request)
    {
        $customers = \App\Customer::all()->where('name', $request->search);
        return view('finance\index')
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

        $customer= Finance::find($id);
        $customer->bankrekeningnummer=$request->input('bankrekening');
        $customer->saldo=$request->input('saldo');
        $customer->aantal_facturen=$request->input('aantalfacturen');
        $customer->omzetbedrag=$request->input('omzetbedrag');
        $customer->limiet=$request->input('limiet');
        $customer->grootboekrekening=$request->input('grootboekrekening');
        $customer->btw_code=$request->input('btwcode');
        $customer->customer_id=$request->input('customerid');
        $customer->save();

        return redirect('sales');
    }

}
