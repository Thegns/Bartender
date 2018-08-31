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

Route::get('/hello/{id}', function ($id) {
   // return view('welcome');
   return 'Y'.$id;
});
Route::get('/', 'UserControllers@index'); 
Route::get('/menu', 'UserControllers@menu'); 
    //
    Route::resource('orders','OrdersController');