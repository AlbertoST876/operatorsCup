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
                        <a href="{{ route("teams.show", $set -> teamA -> id) }}"><img class="inline-block w-24 sm:w-32 h-24 sm:h-32" src="{{ asset($set -> teamA -> logo) }}" alt="{{ $set -> teamA -> name }} Logo"></a>

                        <span class="text-4xl font-bold">
                            @php
                                $teamAResult = 0;
                                $teamBResult = 0;
                            @endphp

                            @if (count($set -> games) == 1)
                                @if ($set -> games[0] -> winner -> id == $set -> teamA -> id)
                                    @php $teamAResult = $set -> games[0] -> wResult; @endphp
                                    @php $teamBResult = $set -> games[0] -> lResult; @endphp
                                @else
                                    @php $teamAResult = $set -> games[0] -> lResult; @endphp
                                    @php $teamBResult = $set -> games[0] -> wResult; @endphp
                                @endif
                            @else
                                @foreach ($set -> games as $game)
                                    @if ($game -> winner == $set -> teamA -> id)
                                        @php $teamAResult++; @endphp
                                    @else
                                        @php $teamBResult++; @endphp
                                    @endif
                                @endforeach
                            @endif

                            {{ $teamAResult }} - {{ $teamBResult }}
                        </span>

                        <a href="{{ route("teams.show", $set -> teamB -> id) }}"><img class="inline-block w-24 sm:w-32 h-24 sm:h-32" src="{{ asset($set -> teamB -> logo) }}" alt="{{ $set -> teamB -> name }} Logo"></a>
                    </div>
                </div>

                <hr>

                <div class="flex my-2 flex-wrap items-center justify-between">
                    <div class="flex flex-nowrap items-center space-x-2">
                        <h3 class="text-xl sm:text-2xl font-black">@lang("app.status"):</h3>
                        <span class="px-4 py-1 text-lg sm:text-xl font-bold rounded-lg" style="background-color: {{ $set -> state -> color }}">{{ $set -> state -> name }}</span>
                    </div>

                    @if (!is_null($set -> youtube))
                        <a href="{{ $set -> youtube }}"><img class="w-12 h-12 rounded-lg" src="{{ asset("storage/images/social-networks/youtube.png") }}" alt="YouTube"></a>
                    @endif

                    <div class="flex flex-nowrap items-baseline space-x-2">
                        <h3 class="text-xl sm:text-2xl font-black">@lang("app.date"):</h3>
                        <span class="text-lg sm:text-xl font-semibold">{{ $set -> datetime -> format($dateFormat) }}</span>
                    </div>
                </div>

                @if (!is_null($set -> mapban))
                    <div class="mt-16 mb-8">
                        <h2 class="block my-2 text-2xl sm:text-4xl font-black">@lang("app.mapban")</h2>

                        <hr>

                        <img class="w-full" src="{{ asset($set -> mapban) }}" alt="@lang("app.mapban")">
                    </div>
                @endif

                @if (count($set -> games[0] -> wStats) > 0 && count($set -> games[0] -> lStats) > 0)
                    <div class="mt-16 mb-8">
                        <h2 class="block my-2 text-2xl sm:text-4xl font-black">@lang("app.stats")</h2>

                        <hr>

                        @foreach ($set -> games as $game)
                            <table class="block w-full min-w-full mt-8 overflow-x-auto">
                                <thead>
                                    <tr class="border-b-2 border-black">
                                        <th class="w-3/12 p-4"></th>
                                        <th class="w-2/12 p-4"></th>
                                        <th class="min-w-[250px] md:w-3/12 p-4 text-xl align-bottom font-bold">@lang("app.player")</th>
                                        <th class="w-1/12 p-4 text-xl text-center align-bottom font-bold">@lang("app.kills")</th>
                                        <th class="w-1/12 p-4 text-xl text-center align-bottom font-bold">@lang("app.deaths")</th>
                                        <th class="w-1/12 p-4 text-xl text-center align-bottom font-bold">@lang("app.assists")</th>
                                        <th class="w-1/12 p-4 text-xl text-center align-bottom font-bold">@lang("app.kd")</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="p-4" rowspan="{{ count($game -> wStats) + 1 }}">
                                            <a href="{{ route("teams.show", $game -> winner -> id) }}"><img class="w-60 h-60" src="{{ asset($game -> winner -> logo) }}" alt="{{ $game -> winner -> name }} Logo"></a>
                                        </td>

                                        <td class="p-4 text-6xl sm:text-8xl font-black" rowspan="{{ count($game -> wStats) + 1 }}">{{ $game -> wResult }}</td>
                                    </tr>

                                    @foreach ($game -> wStats as $player)
                                        <tr class="border-b">
                                            <td class="p-4 text-2xl sm:text-4xl font-bold">{{ $player -> nickname }}</td>
                                            <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $player -> kills }}</td>
                                            <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $player -> deaths }}</td>
                                            <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $player -> assists }}</td>
                                            <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $player -> kd }}</td>
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td class="p-4" rowspan="{{ count($game -> lStats) + 1 }}">
                                            <a href="{{ route("teams.show", $game -> loser -> id) }}"><img class="w-60 h-60" src="{{ asset($game -> loser -> logo) }}" alt="{{ $game -> loser -> name }} Logo"></a>
                                        </td>

                                        <td class="p-4 text-6xl sm:text-8xl font-black" rowspan="{{ count($game -> lStats) + 1 }}">{{ $game -> lResult }}</td>
                                    </tr>

                                    @foreach ($game -> lStats as $player)
                                        <tr class="border-b">
                                            <td class="p-4 text-2xl sm:text-4xl font-bold">{{ $player -> nickname }}</td>
                                            <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $player -> kills }}</td>
                                            <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $player -> deaths }}</td>
                                            <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $player -> assists }}</td>
                                            <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $player -> kd }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                @endif
            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
