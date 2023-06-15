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
                        <a href="{{ route("teams.show", $set -> teams[0] -> id) }}"><img class="inline-block w-24 sm:w-32 h-24 sm:h-32" src="{{ asset($set -> teams[0] -> logo) }}" alt="{{ $set -> teams[0] -> name }} Logo"></a>

                        <span class="px-4 text-4xl font-bold">
                            @php
                                $teamAResult = 0;
                                $teamBResult = 0;
                            @endphp

                            @if (count($set -> games) == 1)
                                @if ($set -> games[0] -> teams[0] -> pivot -> team_id == $set -> teams[0] -> id)
                                    @php $teamAResult = $set -> games[0] -> teams[0] -> pivot -> result; @endphp
                                    @php $teamBResult = $set -> games[0] -> teams[1] -> pivot -> result; @endphp
                                @else
                                    @php $teamAResult = $set -> games[0] -> teams[1] -> pivot -> result; @endphp
                                    @php $teamBResult = $set -> games[0] -> teams[0] -> pivot -> result; @endphp
                                @endif
                            @elseif (count($set -> games) > 1)
                                @foreach ($set -> games as $game)
                                    @if ($game -> teams[0] -> pivot -> team_id == $set -> teams[0] -> id)
                                        @php $teamAResult++; @endphp
                                    @else
                                        @php $teamBResult++; @endphp
                                    @endif
                                @endforeach
                            @else
                                @php
                                    $teamAResult = null;
                                    $teamBResult = null;
                                @endphp
                            @endif

                            {{ $teamAResult }} - {{ $teamBResult }}
                        </span>

                        <a href="{{ route("teams.show", $set -> teams[1] -> id) }}"><img class="inline-block w-24 sm:w-32 h-24 sm:h-32" src="{{ asset($set -> teams[1] -> logo) }}" alt="{{ $set -> teams[1] -> name }} Logo"></a>
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

                @if (count($set -> games) > 0)
                    @if (count($set -> games[0] -> members) > 0)
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
                                            <td class="p-4" rowspan="6">
                                                <a href="{{ route("teams.show", $game -> teams[0] -> id) }}"><img class="w-60 h-60" src="{{ asset($game -> teams[0] -> logo) }}" alt="{{ $game -> teams[0] -> name }} Logo"></a>
                                            </td>

                                            <td class="p-4 text-6xl sm:text-8xl font-black" rowspan="6">{{ $game -> teams[0] -> pivot -> result }}</td>
                                        </tr>

                                        @foreach ($game -> members as $member)
                                            @if ($member -> pivot -> team_id == $game -> teams[0] -> id)
                                                <tr class="border-b">
                                                    <td class="p-4 text-2xl sm:text-4xl font-bold">{{ $member -> nickname }}</td>
                                                    <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $member -> kills }}</td>
                                                    <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $member -> deaths }}</td>
                                                    <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $member -> assists }}</td>
                                                    <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $member -> kd }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                        <tr>
                                            <td class="p-4" rowspan="6">
                                                <a href="{{ route("teams.show", $game -> teams[1] -> id) }}"><img class="w-60 h-60" src="{{ asset($game -> teams[1] -> logo) }}" alt="{{ $game -> teams[1] -> name }} Logo"></a>
                                            </td>

                                            <td class="p-4 text-6xl sm:text-8xl font-black" rowspan="6">{{ $game -> teams[1] -> pivot -> result }}</td>
                                        </tr>

                                        @foreach ($game -> members as $member)
                                            @if ($member -> pivot -> team_id == $game -> teams[1] -> id)
                                                <tr class="border-b">
                                                    <td class="p-4 text-2xl sm:text-4xl font-bold">{{ $member -> nickname }}</td>
                                                    <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $member -> kills }}</td>
                                                    <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $member -> deaths }}</td>
                                                    <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $member -> assists }}</td>
                                                    <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $member -> kd }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            @endforeach
                        </div>
                    @endif
                @endif
            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
