<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.teams")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <div class="flex mt-4 mb-8 flex-nowrap items-center">
                    <img class="w-32 h-32" src="{{ asset($team -> logo) }}" alt="{{ $team -> name }} Logo">
                    <h1 class="block text-4xl sm:text-6xl font-black">{{ $team -> name }}</h1>
                </div>

                <div class="grid gap-16 grid-cols-2 grid-rows-1">
                    <div>
                        <h2 class="block my-2 text-2xl sm:text-4xl font-black">Información</h2>

                        <hr>

                        <div class="flex flex-wrap">
                            <h3 class="block mr-32 my-4 text-lg sm:text-2xl font-bold">Partidos: {{ $matches }}</h3>
                            <h3 class="block my-4 text-lg sm:text-2xl font-bold">Puntos: {{ $points }}</h3>
                        </div>
                    </div>

                    <div>
                        <h2 class="block my-2 text-2xl sm:text-4xl font-black">Redes Sociales</h2>

                        <hr>

                        <div class="flex flex-nowrap items-center justify-center">
                            @if (!is_null($team -> discord)) <a class="mx-2 my-4 w-8 h-8" target="_blank" href="{{ $team -> discord }}"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitter.png") }}" alt="Discord"></a> @endif
                            @if (!is_null($team -> twitter)) <a class="mx-2 my-4 w-8 h-8" target="_blank" href="{{ $team -> twitter }}"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitter.png") }}" alt="Twitter"></a> @endif
                            @if (!is_null($team -> twitch)) <a class="mx-2 my-4 w-8 h-8" target="_blank" href="{{ $team -> twitch }}"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitter.png") }}" alt="Twitch"></a> @endif
                            @if (!is_null($team -> youtube)) <a class="mx-2 my-4 w-8 h-8" target="_blank" href="{{ $team -> youtube }}"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitter.png") }}" alt="YouTube"></a> @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
