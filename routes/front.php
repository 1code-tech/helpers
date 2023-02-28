<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', FrontController::class)->name('home');
Route::get('foo/requests', FrontController::class)->name('requests');
Route::get('foo/controllers', FrontController::class)->name('controllers');
Route::get('foo/responses', FrontController::class)->name('responses');
