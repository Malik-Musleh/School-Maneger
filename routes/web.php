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

// Route::get('/', function () {
//     return view('student');
// });

Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\studentController::class, 'index']);
Route::post('/store', [App\Http\Controllers\studentController::class, 'store']);
Route::get('/create', [App\Http\Controllers\studentController::class, 'create']);
Route::get('/show/{id}', [App\Http\Controllers\studentController::class, 'show']);
Route::get('/edit/{id}', [App\Http\Controllers\studentController::class, 'edit']);
Route::get('/update/{id}', [App\Http\Controllers\studentController::class, 'update']);
Route::get('/destroy/{id}', [App\Http\Controllers\studentController::class, 'destroy']);
