<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'login'])->name('login')->middleware('guest');

Route::get('/books',[BookController::class,'index'])->name('index')->middleware('auth');
Route::get('/books/create',[BookController::class,'create'])->name('create')->middleware('auth');
Route::post('/books/store',[BookController::class,'store'])->name('store')->middleware('auth');
Route::get('/books/{book}/edit',[BookController::class,'edit'])->name('edit')->middleware('auth');
Route::delete('/books/{book}/delete',[BookController::class,'destroy'])->name('destroy')->middleware('auth');
Route::put('/books/{book}/update',[BookController::class,'update'])->name('update')->middleware('auth');


//user
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::post('/auth',[UserController::class,'auth'])->name('auth');
Route::post('/logout',[UserController::class,'logout'])->name('logout');

