<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('post/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('post', [App\Http\Controllers\PostController::class, 'store']);
Route::get('post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::get('post/{post}', [App\Http\Controllers\PostController::class, 'show']);
Route::put('post/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');

// Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
// Route::put('/posts/{id}', 'PostController@update')->name('posts.update');

Route::delete('post/{post}', [App\Http\Controllers\PostController::class, 'destroy']);