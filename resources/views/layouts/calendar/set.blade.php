<div class="flex px-4 py-2 flex-wrap items-center justify-center bg-gray-100 rounded-lg">
    <div class="flex w-full my-2 flex-nowrap items-center justify-center space-x-2">
        <a href="{{ route("teams.show", $set -> teamA -> id) }}"><img class="inline-block w-16 sm:w-24 h-16 sm:h-24" src="{{ asset($set -> teamA -> logo) }}" alt="{{ $set -> teamA -> name }} Logo"></a>

        <a class="text-2xl font-bold" href="{{ route("calendar.show", $set -> id) }}">
            @php
                $teamAResult = 0;
                $teamBResult = 0;
            @endphp

            @if (count($games) == 1)
                @if ($games[0] -> winner == $set -> teamA -> id)
                    @php $teamAResult = $games[0] -> wResult; @endphp
                    @php $teamBResult = $games[0] -> lResult; @endphp
                @else
                    @php $teamAResult = $games[0] -> lResult; @endphp
                    @php $teamBResult = $games[0] -> wResult; @endphp
                @endif
            @else
                @foreach ($games as $game)
                    @if ($game -> winner == $set -> teamA -> id)
                        @php $teamAResult++; @endphp
                    @else
                        @php $teamBResult++; @endphp
                    @endif
                @endforeach
            @endif

            {{ $teamAResult }} - {{ $teamBResult }}
        </a>

        <a href="{{ route("teams.show", $set -> teamB -> id) }}"><img class="inline-block w-16 sm:w-24 h-16 sm:h-24" src="{{ asset($set -> teamB -> logo) }}" alt="{{ $set -> teamB -> name }} Logo"></a>
    </div>

    <span class="block text-2xl text-center font-bold">{{ $set -> datetime -> format($dateFormat) }}</span>
</div>
