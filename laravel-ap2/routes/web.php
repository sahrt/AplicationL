<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listTicket;
use App\Http\Controllers\buyTiket;

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
// route halaman loging
Route::get('/', function () {
    return view('home');
});

//proses route page 1
Route::get('/daftar',[listTicket::class,'getView']);
Route::post('post/daftar',[listTicket::class,'post']);


//proses route page 2
Route::get('/pesan',[buyTiket::class,'getView']);
Route::post('post/pesan',[buyTiket::class,'post']);


