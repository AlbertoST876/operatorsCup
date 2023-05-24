<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.ranking")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <h1 class="block my-8 text-4xl sm:text-6xl font-black">{{ mb_strtoupper(__("app.ranking")) }}</h1>

                <table class="block w-full mt-16 overflow-x-scroll">
                    <thead class="border-b-2 border-black">
                        <tr>
                            <th class="w-[50px] md:w-[100px] p-4"></th>
                            <th class="w-[50px] md:w-[500px] p-4"></th>
                            <th class="w-[50px] md:w-[100px] p-4 text-xl text-center font-bold">Puntos</th>
                            <th class="w-[50px] md:w-[100px] p-4 text-xl text-center font-bold">Ganados</th>
                            <th class="w-[50px] md:w-[100px] p-4 text-xl text-center font-bold">Ganados Overtime</th>
                            <th class="w-[50px] md:w-[100px] p-4 text-xl text-center font-bold">Perdidos Overtime</th>
                            <th class="w-[50px] md:w-[100px] p-4 text-xl text-center font-bold">Perdidos</th>
                            <th class="w-[50px] md:w-[100px] p-4 text-xl text-center font-bold">Diferencia Rondas</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $rank = 1; @endphp

                        @foreach ($teams as $team)
                            <tr class="border-b">
                                <td class="w-[50px] md:w-[100px] p-4 text-3xl font-bold">{{ "#" . $rank++ }}</td>

                                <td class="w-[300px] md:w-[500px] p-4">
                                    <a class="inline-flex flex-nowrap items-center" href="{{ route("teams.show", $team["info"] -> id) }}">
                                        <img class="mr-4 w-24 h-24" src="{{ asset($team["info"] -> logo) }}" alt="{{ $team["info"] -> name }} Logo">
                                        <span class="text-2xl sm:text-4xl font-black">{{ $team["info"] -> name }}</span>
                                    </a>
                                </td>

                                <td class="w-[50px] md:w-[100px] p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["points"] }}</td>
                                <td class="w-[50px] md:w-[100px] p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["wins"] }}</td>
                                <td class="w-[50px] md:w-[100px] p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["winsOvertime"] }}</td>
                                <td class="w-[50px] md:w-[100px] p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["losesOvertime"] }}</td>
                                <td class="w-[50px] md:w-[100px] p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["loses"] }}</td>
                                <td class="w-[50px] md:w-[100px] p-4 text-2xl sm:text-4xl text-center font-bold">{{ $team["roundsDiff"] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
