<?php

use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Cv routes

Route::get('/cvs', [CvController::class, 'index']);
Route::get('/cvs/create', [CvController::class, 'create']);
Route::get('/cvs/{cv}/edit', [CvController::class, 'edit']);
Route::put('cvs/{cv}', [CvController::class, 'update']);
