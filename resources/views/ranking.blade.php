<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.ranking")])

    <body>
        @include("layouts.header")

        <main>
            <div class="max-w-screen-xl mx-auto">
                <h1 class="block my-8 text-4xl sm:text-6xl font-black">{{ mb_strtoupper(__("app.ranking")) }}</h1>

                <hr>


            </div>
        </main>
    </body>
</html>
