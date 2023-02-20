<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlashController;
use App\Http\Controllers\YouTubeController;
use App\Http\Controllers\TransactionController;

Route::view('/', 'welcome');

Route::get('transaction', TransactionController::class)->name('transaction');

Route::view('active-link/home', 'active-link.home')->name('active-link.home');
Route::view('active-link/orders', 'active-link.orders')->name('active-link.orders');
Route::view('active-link/settings/profile', 'active-link.settings.profile')->name('active-link.settings.profile');
Route::view('active-link/settings/security', 'active-link.settings.security')->name('active-link.settings.security');

Route::get('flash', [FlashController::class, 'index'])->name('flash');
Route::post('flash', [FlashController::class, 'store'])->name('flash.store');

Route::get('youtube', YouTubeController::class)->name('youtube');
