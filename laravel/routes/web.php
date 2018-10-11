<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addcost', function () {
    return view('addcost/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/sales', '\App\Http\Controllers\SalesController@index');
Route::post('/sales/search', '\App\Http\Controllers\SalesController@search');


Route::get('/finance', '\App\Http\Controllers\FinanceController@index');
Route::get('/development', '\App\Http\Controllers\DevelopmentController@index');
Route::post('/sales', array('uses'=>'SalesController@index'));
Route::post('/addcost/1', ('AddcostController@insert'));