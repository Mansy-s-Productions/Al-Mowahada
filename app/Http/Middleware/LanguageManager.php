<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageManager {
    public function handle(Request $request, Closure $next) {
        if (isset($_COOKIE['lang'])) {
            $locale = $_COOKIE['lang'];
            if (in_array($locale, config('app.available_locales'))) {
                app()->setLocale($locale);
            }
        }
        return $next($request);
    }
}
