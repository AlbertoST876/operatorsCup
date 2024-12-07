<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Return view index
     *
     * @return Response
     */
    public function index()
    {
        return view("index");
    }

    /**
     * Return view rules
     *
     * @return Response
     */
    public function rules()
    {
        return view("rules");
    }

    /**
     * Return view about
     *
     * @return Response
     */
    public function about()
    {
        return view("footer.about");
    }

    /**
     * Return view license
     *
     * @return Response
     */
    public function license()
    {
        return view("footer.license", [
            "date" => self::getDateFormatted("2023-05-30"),
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
            "date" => self::getDateFormatted("2023-05-30"),
        ]);
    }
}
