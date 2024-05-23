<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::prefix("img") -> group(function() {
    Route::put("", function(Request $request) {
        $request -> validate([
            "abbr" => ["required", "string", "max:10"],
            "img" => ["required", "image", "mimes:png", "max:2048", "dimensions:min_width=128,min_height=128,max_width=2048,max_height=2048"],
        ]);

        $imageName = $request -> abbr . "." . $request -> file("img") -> extension();
        $request -> file("img") -> storeAs("public/images/teams", $imageName);

        return response();
    });

    Route::patch("{img}", function(Request $request, $img) {
        $request -> validate([
            "abbr" => ["required", "string", "max:10"],
            "img" => ["nullable", "image", "mimes:png", "max:2048", "dimensions:min_width=128,min_height=128,max_width=2048,max_height=2048"],
        ]);

        $oldImagePath = "public/images/teams/" . $img;

        if ($request -> hasFile("img")) {
            if (Storage::exists($oldImagePath)) {
                Storage::delete($oldImagePath);
            }

            $imageName = $request -> abbr . "." . $request -> file("img") -> extension();
            $request -> file("img") -> storeAs("public/images/teams", $imageName);
        } else {
            $imageName = $request -> abbr . ".png";

            if (Storage::exists($oldImagePath)) {
                Storage::move($oldImagePath, "public/images/teams/" . $imageName);
            } else {
                return response() -> status(404);
            }
        }

        return response();
    });
}) -> middleware("auth:sanctum");
