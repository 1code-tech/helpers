<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function __invoke()
    {
        transaction(function () {
            User::query()->create([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'password' => bcrypt(str()->random()),
            ]);

            throw new Exception;

            User::query()->create([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'password' => bcrypt(str()->random()),
            ]);
        });
    }
}
