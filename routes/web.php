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
*/Route::get('/portfolio', function () {
    return view('info');
});
Route::get('/aboutme', function () {
    return view('about');
});

Route::get('/main', function () {
    return view('main');
});
Route::get('/contacts', function () {
    return view('contacts');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
