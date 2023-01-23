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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('create_post');
Route::post('/posts/create', [App\Http\Controllers\PostController::class, 'store_post'])->name('store_post');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'all_post'])->name('all_post');
