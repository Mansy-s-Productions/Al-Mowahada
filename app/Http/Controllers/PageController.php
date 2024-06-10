<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class PageController extends Controller {
    public function getAbout() {
        return view('about');
    }

    public function getContact() {
        return view('contact');
    }

    public function getSwitchLang($locale) {
        if ( ! in_array($locale, ['en', 'ar'])) {
            abort(400);
        }
        App::setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
