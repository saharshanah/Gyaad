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

#*****************************************************
#****************     frontend      ******************
#*****************************************************
    Route::get('en', 'App\Http\Controllers\frontend\appController@indexEn');
    Route::get('ar', 'App\Http\Controllers\frontend\appController@indexAr');



#*****************************************************
#****************     Backend      ******************
#*****************************************************

#Clients
route::group(['prefix'=>'dashboard/clients'],function(){
    route::get('index','App\Http\Controllers\backend\ClientController@index');

});
#==============================================
