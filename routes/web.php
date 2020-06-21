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

Route::get('/', function () {
    return view('layouts.master');
});

Route::resource('fasilitas','AdminFasilitasController');
Route::resource('ruangan','AdminRuanganController');
Route::resource('homestay','AdminHomestayController');
Route::resource('dashboard1', 'AdminDashboardadminController');
Route::resource('order','AdminOrderController');