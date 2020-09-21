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


Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

//USERS
Route::resource('user', 'UserController');

//MEMBERS
Route::get('member/guru', 'MemberController@memberGuru');
Route::get('member/siswa', 'MemberController@memberSiswa');
Route::resource('member', 'MemberController');
Route::get('memberReport','MemberController@memberReport');


//BOOKS
Route::resource('book','BookController');
Route::get('bookReport','BookController@bookReport');

//CATEGORY
Route::resource('category', 'CategoryController');

//VISITORS
Route::resource('visitor','VisitorController');
Route::get('visitor.search', 'VisitorController@search');
Route::get('visitorReport','VisitorController@visitorReport');

//TRANSACTIONS
Route::resource('transaction','TransactionController');
Route::get('transactionReport','TransactionController@transactionReport');

//CARD
Route::resource('card','CardController');






Route::get('edit', function () {
    return view('auth.edit');
});

Route::get('pencarianbuku', function () {
    return view('layouts.pencarianbuku');
});
Route::get('pengunjung', function () {
    return view('layouts.pengunjung');
});