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
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post', [App\Http\Controllers\PostController::class, 'show'])->name('post');


Route::get('/post/edit/{post}', [App\Http\Controllers\PostController::class, 'getEdit']
)->name('post.get.edit')->middleware('role:editor');

Route::put('/post/', [App\Http\Controllers\PostController::class, 'postEdit'])
    ->name('post.post.edit')->middleware('role:editor');

Route::get('/post/create', [App\Http\Controllers\PostController::class, 'getCreate'])
    ->name('post.get.create')->middleware('role:writer');

Route::post('/post/created', [App\Http\Controllers\PostController::class, 'postCreate'])
    ->name('post.post.create')->middleware('role:writer');
