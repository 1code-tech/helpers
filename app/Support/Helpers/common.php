<?php

use Closure;
use Illuminate\Support\Facades\DB;

if (!function_exists('transaction')) {
    function transaction(Closure $callback, int $attempts = 1): mixed
    {
        if (DB::transactionLevel() > 0) {
            return $callback();
        }

        return DB::transaction($callback, $attempts);
    }
}
