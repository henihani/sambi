<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:user')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/home', 'HomeController@index');

    Route::get('/', function () {
        if (Auth::user()->role=='petugas'){
            return view('petugas');
        }else{
            return view('kepalaperpus'); 
        }
    });
});
