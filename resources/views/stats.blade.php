<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.stats")])

    <body>
        @include("layouts.header")

        <main>
            <div class="max-w-screen-xl mx-auto p-4">
                <h1 class="block my-8 text-4xl sm:text-6xl font-black">{{ mb_strtoupper(__("app.stats")) }}</h1>

                <hr>


            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
