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

// Login systeem

Route::post('/login/custom' ,[
    'uses' => 'LoginController@login' ,
    'as' => 'login.custom'
]);


Route::group(['middleware' => 'auth'],function(){

    Route::get('/home',function (){
        return view('home');
    })->name('home');

    Route::get('/dashboard',function (){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/sales',function (){
        return view('sales/index');
    })->name('sales');

    //search routes
    Route::post('/sales/search', '\App\Http\Controllers\SalesController@search');

    Route::get('/finance',function (){
        return view('finance/index');
    })->name('finance');
    Route::post('/finance/search', '\App\Http\Controllers\FinanceController@search');

    Route::get('/development',function (){
        return view('development/index');
    })->name('development');
    Route::post('/development/search', '\App\Http\Controllers\DevelopmentController@search');
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/addcost', function () {
    return view('addcost/index');
});

Route::get('/addcost', function () {
    return view('addcost/index');
});

//delete en edit routes
Route::get('/delete/{id}', '\App\Http\Controllers\addcostController@destroy');
Route::get('/edit/{id}', '\App\Http\Controllers\addcostController@edit');
Route::put('/edit/{id}', '\App\Http\Controllers\AddcostController@update')->name('customer.update');
Route::put('/edit/{id}', 'FinanceController@update')->name('finance.update');
Route::put('/edit/{id}', 'SalesController@update')->name('sales.update');
Route::put('/edit/{id}', 'DevelopmentController@update')->name('development.update');

//addcost routes
Auth::routes();
Route::post('/addcost/1', ('AddcostController@insert'));
Route::post('/addcost/2', ('FinanceController@insert2'));
Route::post('/addcost/3', ('SalesController@insert3'));
Route::post('/addcost/4', ('DevelopmentController@insert4'));





Route::post('/sales', array('uses'=>'SalesController@index'));

