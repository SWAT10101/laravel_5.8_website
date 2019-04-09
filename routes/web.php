<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes(['verify' => true]);
    

    Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

  
    
    Route::get('/addTec', 'Addtec@viewAddTec')->middleware('verified')->name('addtec');
    Route::post('/addTec', 'Addtec@createTec')->middleware('verified');

    Route::get('/addCust', 'AddCustomer@viewAddCust')->middleware('verified')->name('addcust');
    Route::get('/addDev', 'AddDevcies@viewAddDvic')->middleware('verified')->name('adddvi');



