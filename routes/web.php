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

Route::get('/', function () {
    return view('student');
});

Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\studentController::class, 'index'])->name('home');
Route::get('/store', [App\Http\Controllers\studentController::class, 'store'])->name('home');
Route::get('/create', [App\Http\Controllers\studentController::class, 'create'])->name('home');
Route::get('/show/{id}', [App\Http\Controllers\studentController::class, 'show'])->name('home');
Route::get('/edit/{id}', [App\Http\Controllers\studentController::class, 'edit'])->name('home');
Route::get('/update/{id}', [App\Http\Controllers\studentController::class, 'update'])->name('home');
Route::get('/destroy/{id}', [App\Http\Controllers\studentController::class, 'destroy'])->name('home');


