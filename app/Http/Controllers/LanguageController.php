<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    /**
     * Set laravel localization
     *
     * @param string $locale
     * @return void
     */
    public function index(string $locale)
    {
        App::setLocale($locale);
        session() -> put("locale", $locale);

        return redirect() -> back();
    }
}
