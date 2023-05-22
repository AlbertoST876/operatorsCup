<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.teams")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <div class="flex my-4 flex-nowrap items-center">
                    <img class="w-32 h-32" src="{{ asset($team -> logo) }}" alt="{{ $team -> name }} Logo">
                    <h1 class="block text-4xl sm:text-6xl font-black">{{ $team -> name }}</h1>
                </div>

                <hr>


            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
