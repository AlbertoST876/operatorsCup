<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.rules")])

    <body class="flex flex-col h-screen">
        @include("layouts.header")

        <main class="flex-1 min-h-0">
            <embed class="h-full" src="{{ asset("storage/pdf/Rules_" . mb_strtoupper(app() -> getLocale()) . ".pdf") }}" type="application/pdf" width="100%" height="100%" frameborder="0">
        </main>
    </body>
</html>
