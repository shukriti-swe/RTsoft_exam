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

Route::any('/', 'homecontroller@index')->name('index_main');

Route::any('/home', 'homecontroller@home')->name('home');
Route::any('/dashboard', 'homecontroller@dashboard')->name('dashboard');
Route::any('/customer_info', 'homecontroller@customer_info')->name('customer_info');
Route::any('/customer_details', 'homecontroller@customer_details')->name('customer_details');
Route::any('/sell_report', 'homecontroller@sell_report')->name('sell_report');



