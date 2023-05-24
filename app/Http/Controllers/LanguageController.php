<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    /**
     * Set laravel localization
     *
     * @param string $locale
     * @return Response
     */
    public function index(string $locale)
    {
        App::setLocale($locale);
        session() -> put("locale", $locale);

        return redirect() -> back();
    }
}
