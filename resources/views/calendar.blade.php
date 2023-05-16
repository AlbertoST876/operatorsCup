<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.calendar")])

    <body>
        @include("layouts.header")
    </body>
</html>
