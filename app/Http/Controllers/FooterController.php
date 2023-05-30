<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FooterController extends Controller
{
    const DATE_FORMAT = [
        "en" => "Y-m-d",
        "es" => "d/m/Y",
    ];

    /**
     * Return view license
     *
     * @return Response
     */
    public function license()
    {
        return view("footer.license", [
            "dateFormat" => self::DATE_FORMAT[app() -> getLocale()],
        ]);
    }

    /**
     * Return view license
     *
     * @return Response
     */
    public function privacyPolicy()
    {
        return view("footer.privacyPolicy", [
            "dateFormat" => self::DATE_FORMAT[app() -> getLocale()],
        ]);
    }
}
