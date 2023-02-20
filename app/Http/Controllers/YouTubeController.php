<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YouTubeController extends Controller
{
    public function __invoke()
    {
        // $url = 'https://youtu.be/Jm-33Qnu7sY';
        $url = 'https://www.youtube.com/watch?v=Jm-33Qnu7sY';

        return view('youtube.index', compact('url'));
    }
}
