<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ShoppingListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ PagesController::class, 'index' ])->name('pages.index');

// User routes
Route::get('/profile', function () { return view('auth.profile'); })->name('profile')->middleware('auth');
Route::get('/update', [ UserController::class, 'edit' ])->name('auth.edit');

// Settings routes
Route::get('/settings', [ SettingController::class, 'index' ])->name('settings.index')->middleware('auth');

// Group routes
Route::get('/groups', [ GroupController::class, 'index' ])->name('groups.index')->middleware('auth');
Route::get('/group/create', [ GroupController::class, 'create' ])->name('groups.create')->middleware('auth');
Route::get('/groups/{group:uuid}', [ GroupController::class, 'show' ])->name('groups.show')->middleware('auth');
Route::get('/groups/{group:uuid}/add-member', [ GroupController::class, 'addMember' ])->name('groups.add-member')->middleware('auth');

// Chat routes
Route::get('/chats', [ChatController::class, 'index'])->name('chats.index')->middleware('auth');
Route::get('/chat/{ChatRoom:uuid}', [ChatController::class, 'show'])->name('chats.show')->middleware('auth');

// List routes
Route::get('/lists', [ShoppingListController::class, 'index'])->name('list.index')->middleware('auth');
Route::get('/lists/create', [ShoppingListController::class, 'create'])->name('list.create')->middleware('auth');
Route::get('/lists/{list:uuid}', [ShoppingListController::class, 'show'])->name('list.show')->middleware('auth');

// Auth routes
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::get('/register', function () { return view('auth.register'); })->name('register');