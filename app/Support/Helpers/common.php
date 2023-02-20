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

if (!function_exists('youtube_video_id')) {
    function youtube_video_id(string $url): string|null
    {
        $regex = '~
            ^(?:https?://)?                          # Optional protocol
            (?:www[.])?                              # Optional sub-domain
            (?:youtube[.]com/watch[?]v=|youtu[.]be/) # Mandatory domain name (w/ query string in .com)
            ([^&]{11})                               # Video id of 11 characters as capture group 1
            ~x';

        preg_match($regex, $url, $matches);

        return $matches[1] ?? null;
    }
}

if (!function_exists('youtube_embed_url')) {
    function youtube_embed_url(string $url): string|null
    {
        $id = youtube_video_id($url);

        return "https://www.youtube.com/embed/{$id}";
    }
}








if (!function_exists('youtube_embed_url')) {
    function youtube_embed_url(string $url): string
    {
        $id = youtube_video_id($url);

        return "https://www.youtube.com/embed/{$id}";
    }
}
