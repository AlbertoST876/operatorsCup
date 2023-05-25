<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.ranking")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <h1 class="block my-8 text-4xl sm:text-6xl font-black">{{ mb_strtoupper(__("app.ranking")) }}</h1>

                <table class="block w-full overflow-x-auto">
                    <thead class="border-b-2 border-black">
                        <tr>
                            <th class="p-4"></th>
                            <th class="min-w-[400px] sm:min-w-[500px] p-4"></th>
                            <th class="p-4 text-xl text-center align-bottom font-bold">@lang("app.points")</th>
                            <th class="p-4 text-xl text-center align-bottom font-bold">@lang("app.won")</th>
                            <th class="p-4 text-xl text-center align-bottom font-bold">@lang("app.won_overtime")</th>
                            <th class="p-4 text-xl text-center align-bottom font-bold">@lang("app.lost_overtime")</th>
                            <th class="p-4 text-xl text-center align-bottom font-bold">@lang("app.lost")</th>
                            <th class="p-4 text-xl text-center align-bottom font-bold">@lang("app.difference_rounds")</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $rank = 1;
                        @endphp

                        @foreach ($teams as $team)
                            <tr class="border-b">
                                <td class="p-4 text-3xl font-bold">{{ "#" . $rank++ }}</td>

                                <td class="min-w-[400px] sm:min-w-[500px] p-4">
                                    <a class="inline-flex flex-nowrap items-center" href="{{ route("teams.show", $team["info"] -> id) }}">
                                        <img class="mr-4 w-24 h-24" src="{{ asset($team["info"] -> logo) }}" alt="{{ $team["info"] -> name }} Logo">
                                        <span class="text-2xl sm:text-4xl font-black">{{ $team["info"] -> name }}</span>
                                    </a>
                                </td>

                                <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["points"] }}</td>
                                <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["won"] }}</td>
                                <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["wonOvertime"] }}</td>
                                <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["lostOvertime"] }}</td>
                                <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["lost"] }}</td>
                                <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["roundsDiff"] > 0 ? "+" . $team["roundsDiff"] : $team["roundsDiff"] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
