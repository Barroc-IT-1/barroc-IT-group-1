<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddcostController extends Controller
{

    public function insert()
    {
        DB::table('customer')->insert([
            ['name' => 'name'],
            ['lastname' => 'last_name'],
            ['address' => 'address'],
            ['zipcode' => 'zipcode'],
            ['residence' => 'residence'],
            ['telnumber' => 'tel_number'],
            ['faxnumber' => 'fax_number'],
            ['email' => 'email'],
            ['company' => 'company'],
            ['customernumber' => 'customer_number']
        ]);
    }
}
