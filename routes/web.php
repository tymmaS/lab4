<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\ClientController;
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
Route::get('/post/create', function () {
    DB::table('post') ->insert([
        'title' => 'Student',
        'body' =>'Temirlan Serik'
    ]);
});
Route::get('/post', function () {
  $post = Post::find(1);
   return $post ->body;

});


Auth::routes();
Route::get('post2', [ClientController::class, 'index']);

