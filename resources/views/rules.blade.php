<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.rules")])

    <body>
        <div class="grid grid-rows-[auto,1fr] h-screen">
            @include("layouts.header")

            <main>
                <embed src="{{ asset("storage/ReglamentoV1.pdf") }}" type="application/pdf" width="100%" height="100%" frameborder="0">
            </main>
        </div>
    </body>
</html>
