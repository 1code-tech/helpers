<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{
    public function index()
    {
        return view('flash.index');
    }

    public function store(Request $request)
    {
        $type = $request->input('type');

        flash('Тестовый текст сообщения', $type);

        return to_route('flash');
    }
}
