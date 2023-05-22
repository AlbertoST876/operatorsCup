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
     * Return view calendar
     *
     * @return Response
     */
    public function calendar()
    {
        return view("calendar");
    }

    /**
     * Return view ranking
     *
     * @return Response
     */
    public function ranking()
    {
        return view("ranking");
    }

    /**
     * Return view stats
     *
     * @return Response
     */
    public function stats()
    {
        return view("stats");
    }
}
