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



//laravel內建的身分驗證功能
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//首頁路由
Route::get('/', function () {
    return view('index');
});
Route::get('/manager', function () {
    return view('manager');
});
//商品專區路由
Route::get('/store', function (){
    return view('store');
});
