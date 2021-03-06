<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index'])->name('pages.index');

// Auth routes
Route::get('/login', function () { return view('auth.login'); })->name('auth.login');
Route::get('/register', function () { return view('auth.register'); })->name('auth.register');

Route::get('/update', [UserController::class, 'edit'])->name('auth.edit');
Route::post('/update', [UserController::class, 'update'])->name('auth.update');
Route::get('/profile', function () { return view('auth.profile'); })->name('profile');