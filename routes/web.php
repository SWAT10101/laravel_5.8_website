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
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT');
header("Access-Control-Allow-Headers: Authorization, X-Requested-With,  Content-Type, Accept");


Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes(['verify' => true]);
    

    Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

  
    
    Route::get('/addtec', 'CreateUserController@test')->middleware('verified')->name('addtec');



