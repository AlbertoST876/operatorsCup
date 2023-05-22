<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.teams")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <h1 class="block my-8 text-4xl sm:text-6xl font-black">{{ mb_strtoupper(__("app.teams")) }}</h1>

                <hr>

                <div class="grid my-8 gap-16 grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 grid-rows-5 lg:grid-rows-4 2xl:grid-rows-3">
                    @foreach ($teams as $team)
                        <a href="{{ route("teams.show", $team -> id) }}">{{ $team -> name }}</a>
                    @endforeach
                </div>
            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
