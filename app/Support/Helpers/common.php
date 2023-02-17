<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

if (!function_exists('transaction')) {
    function transaction(callable $callback, int $attempts = 1): mixed
    {
        if (DB::transactionLevel() > 0) {
            return $callback();
        }

        return DB::transaction($callback, $attempts);
    }
}

if (!function_exists('active_link')) {
    function active_link(string|array $names, string $class = 'active'): string|null
    {
        if (is_string($names)) {
            $names = [$names];
        }

        return Route::is($names) ? $class : null;
    }
}

if (!function_exists('flash')) {
    function flash(string $message, string $type = 'success'): void
    {
        session()->flash('flash.message', $message);
        session()->flash('flash.type', $type);
    }
}
