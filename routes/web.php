<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
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

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kemampuan', function () {
    return view('kemampuan');
});

Route::get('/pengalaman', function () {
    return view('pengalaman');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/kontak', function () {
    return view('kontak');
});



Route::get('kontak', [KontakController::class,'index']);
Route::post('add', [KontakController::class, 'add']);