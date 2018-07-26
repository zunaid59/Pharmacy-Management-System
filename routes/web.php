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
    return view('auth.login');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/admin', function () {
    return view('admin.admin');
});




Route::resource('/medicine','MedicineController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/invoice','InvoiceController');

Route::get('/findPrice', array('as'=>'findPrice','uses'=>'InvoiceController@findPrice'));


