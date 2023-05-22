<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.rules")])

    <body class="grid grid-rows-[auto,1fr] h-screen">
        @include("layouts.header")

        <main>
            <embed src="{{ asset("storage/pdf/Rules_" . mb_strtoupper(app() -> getLocale()) . ".pdf") }}" type="application/pdf" width="100%" height="100%" frameborder="0">
        </main>
    </body>
</html>
