<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.teams")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <h1 class="block my-8 text-4xl sm:text-6xl font-black">{{ mb_strtoupper(__("app.teams")) }}</h1>

                <hr>

                <div class="flex flex-wrap items-center justify-center">
                    @foreach ($teams as $team)
                        <a class="m-16" href="{{ route("teams.show", $team -> abbr) }}"><img class="w-32 h-32 sm:w-48 sm:h-48" src="{{ asset($team -> logo) }}" alt="{{ $team -> name }} Logo"></a>
                    @endforeach
                </div>
            </div>
        </main>

        @include("layouts.footer")
    </body>
</html>
