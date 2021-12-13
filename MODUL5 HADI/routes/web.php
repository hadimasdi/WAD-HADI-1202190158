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
    return view('home');
});

Route::get('/vaccine', function () {
    return view('vaccine');
});

Route::get('/patient', function () {
    return view('patient');
});

Route::get('/tambahPatient', function () {
    return view('tambahPatient');
});
