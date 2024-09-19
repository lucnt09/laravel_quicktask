<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

//Route::get('users', UserController::class);
Route::resource('tasks', TaskController::class)->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lang/{lang}', [LanguageController::class, 'change'])->name('lang.change');

