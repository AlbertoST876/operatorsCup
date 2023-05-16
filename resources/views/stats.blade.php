<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.stats")])

    <body>
        @include("layouts.header")
    </body>
</html>
