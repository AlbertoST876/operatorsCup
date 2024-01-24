<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.stats")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <h1 class="block my-8 text-4xl sm:text-6xl font-black">{{ mb_strtoupper(__("app.stats")) }}</h1>

                <table id="sortable" class="block w-full overflow-x-auto">
                    <thead>
                        <tr class="border-b-2 border-black">
                            <th class="w-1/6 p-4"></th>
                            <th class="min-w-[250px] md:w-1/6 p-4 text-xl text-center align-bottom font-bold">@lang("app.player")</th>
                            <th class="w-1/6 p-4 text-xl text-center align-bottom font-bold cursor-pointer hover:underline underline-offset-4" onclick="sortTable(2)">@lang("app.kills")</th>
                            <th class="w-1/6 p-4 text-xl text-center align-bottom font-bold cursor-pointer hover:underline underline-offset-4" onclick="sortTable(3)">@lang("app.deaths")</th>
                            <th class="w-1/6 p-4 text-xl text-center align-bottom font-bold cursor-pointer hover:underline underline-offset-4" onclick="sortTable(4)">@lang("app.assists")</th>
                            <th class="w-1/6 p-4 text-xl text-center align-bottom font-bold cursor-pointer hover:underline underline-offset-4" onclick="sortTable(5)">@lang("app.kd")</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $rank = 1;
                        @endphp

                        @foreach ($members as $member)
                            <tr class="border-b">
                                <td class="p-4 text-3xl font-bold">{{ "#" . $rank++ }}</td>
                                <td class="p-4 text-2xl sm:text-4xl font-bold">{{ $member -> nickname }}</td>
                                <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ is_null($member -> kills) ? 0 : $member -> kills }}</td>
                                <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ is_null($member -> deaths) ? 0 : $member -> deaths }}</td>
                                <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ is_null($member -> assists) ? 0 : $member -> assists }}</td>
                                <td class="p-4 text-2xl sm:text-4xl text-center font-bold">{{ is_null($member -> kd) ? "0.00" : $member -> kd }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

        @include("layouts.footer")
    </body>
</html>
