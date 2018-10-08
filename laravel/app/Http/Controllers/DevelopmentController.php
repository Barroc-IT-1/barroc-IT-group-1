<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Development;

class DevelopmentController extends Controller
{
    public function index()
    {
        $development=Development::all();
        return view('development\index')
            ->with('development', $development);
    }
}
