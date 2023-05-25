<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.calendar") . " - " . __("app.match")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <div class="flex my-2 flex-wrap items-center justify-between">
                    <h1 class="block my-8 text-4xl sm:text-6xl font-black">{{ mb_strtoupper(__("app.match")) }}</h1>

                    <div class="flex flex-nowrap items-center space-x-2">
                        <a href="{{ route("teams.show", $set["info"] -> winner -> id) }}"><img class="inline-block w-24 sm:w-32 h-24 sm:h-32" src="{{ asset($set["info"] -> winner -> logo) }}" alt="{{ $set["info"] -> winner -> name }} Logo"></a>

                        <span class="text-4xl font-bold">
                            @if (count($set["games"]) == 1)
                                {{ $set["games"][0] -> wResult }} - {{ $set["games"][0] -> lResult }}
                            @else
                                @php
                                    $wPoints = 0;
                                    $lPoints = 0;
                                @endphp

                                @foreach ($set["games"] as $game)
                                    @if ($game -> winner == $set["info"] -> winner -> id)
                                        @php $wPoints++; @endphp
                                    @else
                                        @php $lPoints++; @endphp
                                    @endif
                                @endforeach

                                {{ $wPoints }} - {{ $lPoints }}
                            @endif
                        </span>

                        <a href="{{ route("teams.show", $set["info"] -> loser -> id) }}"><img class="inline-block w-24 sm:w-32 h-24 sm:h-32" src="{{ asset($set["info"] -> loser -> logo) }}" alt="{{ $set["info"] -> loser -> name }} Logo"></a>
                    </div>
                </div>

                <hr>

                <div class="flex my-2 flex-nowrap items-center justify-between">
                    <div class="flex flex-nowrap items-center space-x-2">
                        <h3 class="text-xl sm:text-2xl font-black">@lang("app.status"):</h3>
                        <span class="px-4 py-1 text-lg sm:text-xl font-bold rounded-lg" style="background-color: {{ $set["info"] -> state -> color }}">{{ $set["info"] -> state -> name }}</span>
                    </div>

                    <div class="flex flex-nowrap items-baseline space-x-2">
                        <h3 class="text-xl sm:text-2xl font-black">@lang("app.date"):</h3>
                        <span class="text-lg sm:text-xl font-semibold">{{ $set["info"] -> datetime -> format($dateFormat) }}</span>
                    </div>
                </div>

                @if (!is_null($set["info"] -> mapban))
                    <div class="mt-16 mb-8">
                        <h2 class="block my-2 text-2xl sm:text-4xl font-black">@lang("app.mapban")</h2>
                        <img class="block w-full my-4" src="{{ asset($set["info"] -> mapban) }}" alt="@lang("app.mapban")">
                    </div>
                @endif
            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
