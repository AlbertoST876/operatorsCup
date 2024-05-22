<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("img", function(Request $request) {
    $request -> validate([
        "name" => ["required", "string", "max:10"],
        "img" => ["required", "image", "mimes:png,jpg,jpeg", "max:2048", "dimensions:min_width=128,min_height=128,max_width=2048,max_height=2048"],
    ]);

    $imageName = $request -> name . "." . $request -> file("img") -> extension();
    $request -> file("img") -> storeAs("public/images/teams", $imageName);

    return response();
}) -> middleware("auth:sanctum");
