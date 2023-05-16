<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.rules")])

    <body>
        @include("layouts.header")

        <main>
            <embed class="block w-full h-[calc(100vh-104px)] overflow-y-auto" src="{{ asset("storage/ReglamentoV1.pdf") }}" frameborder="0">
        </main>
    </body>
</html>
