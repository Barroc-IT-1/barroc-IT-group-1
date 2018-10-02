<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{

    public function index()
    {
        return view('sales/index');

    }

    public function insert()
    {
        DB::table('sales')->insert([
            ['offernumber' => 'offer_numbers'],
            ['offerstatus' => 'offer_status'],
            ['prospec' => 'prospect'],
            ['date_of_action' => 'date_of_action'],
            ['last_contact_data' => 'last_contact_data'],
            ['next_action' => 'next_action'],
            ['sale_percentage' => 'sale_percentage'],
            ['creditworthy' => 'creditworthy'],
            ['customernumber' => 'costumer_number']
        ]);
    }
}
