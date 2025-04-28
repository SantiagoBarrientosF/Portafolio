<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLanguage(Request $request, $locale)
    {
        if (in_array($locale, config('app.available_languages'))) {
            Session::put('locale', $locale);
            App::setLocale($locale);
        }
        return redirect()->back();
    }
}
