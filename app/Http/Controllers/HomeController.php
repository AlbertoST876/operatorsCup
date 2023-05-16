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
     * Return view teams
     *
     * @return Response
     */
    public function teams()
    {
        return view("teams");
    }

    /**
     * Undocumented calendar
     *
     * @return Response
     */
    public function calendar()
    {
        return view("calendar");
    }

    /**
     * Undocumented ranking
     *
     * @return Response
     */
    public function ranking()
    {
        return view("ranking");
    }

    /**
     * Undocumented stats
     *
     * @return Response
     */
    public function stats()
    {
        return view("stats");
    }
}
