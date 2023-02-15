<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::view('/', 'welcome');

Route::get('transaction', TransactionController::class);
