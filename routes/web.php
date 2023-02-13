<?php

use Illuminate\Support\Facades\Route;

Route::get('foo', function () {
    return foo();
});

Route::get('/', function () {
    return view('welcome');
});
