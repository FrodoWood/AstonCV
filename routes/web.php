<?php

use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Cv routes

Route::get('/cvs', [CvController::class, 'index'])->name('cvs');
Route::post('/cvs', [CvController::class, 'store'])->middleware('auth');
Route::get('/cvs/create', [CvController::class, 'create'])->name('createCV')->middleware('auth');
Route::get('/cvs/{cv}/show', [CvController::class, 'show'])->name('showCV');
Route::get('/cvs/{cv}/edit', [CvController::class, 'edit'])->name('editCV')->middleware('auth');
Route::put('cvs/{cv}', [CvController::class, 'update'])->name('updateCV')->middleware('auth');
