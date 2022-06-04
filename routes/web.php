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
    return view('Login');
});
Route::get('/Home', function () {
    return view('Home');
});
Route::get('/DetailKHS', function () {
    return view('DetailKHS');
});
Route::get('/DaftarKegiatan', function () {
    return view('DaftarKegiatan');
});