<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Crypt;
use App\Models\GameMember;
use App\Models\Workday;
use App\Models\Team;
use App\Models\Set;

class CalendarController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware("auth", except: [
                "index",
                "show",
            ]),
        ];
    }

    /**
     * Display a listing of the calendar.
     *
     * @return Response
     */
    public function index()
    {
        return view("calendar.index", [
            "dateFormat" => HomeController::DATE_FORMAT[app() -> getLocale()],
            "workdays" => Workday::select("id", "name_" . app() -> getLocale() . " AS name", "abbr") -> get(),
        ]);
    }

    /**
     * Display the specified calendar.
     *
     * @param string $id
     * @return Response
     */
    public function show(string $id)
    {
        return view("calendar.show", [
            "dateFormat" => HomeController::DATE_FORMAT[app() -> getLocale()],
            "set" => Set::findOrFail(Crypt::decrypt($id)),
        ]);
    }
}
