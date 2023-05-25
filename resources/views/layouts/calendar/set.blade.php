<div class="flex px-4 py-2 flex-wrap items-center justify-center bg-gray-100 rounded-lg">
    <div class="flex my-2 flex-nowrap items-center space-x-2">
        <a href="{{ route("teams.show", $set -> winner -> id) }}"><img class="inline-block w-16 sm:w-24 h-16 sm:h-24" src="{{ asset($set -> winner -> logo) }}" alt="{{ $set -> winner -> name }} Logo"></a>

        <a class="text-2xl font-bold" href="{{ route("calendar.show", $set -> id) }}">
            @if (count($games) == 1)
                {{ $games[0] -> wResult }} - {{ $games[0] -> lResult }}
            @else
                @php
                    $wPoints = 0;
                    $lPoints = 0;
                @endphp

                @foreach ($games as $game)
                    @if ($game -> winner == $set -> winner -> id)
                        @php $wPoints++; @endphp
                    @else
                        @php $lPoints++; @endphp
                    @endif
                @endforeach

                {{ $wPoints }} - {{ $lPoints }}
            @endif
        </a>

        <a href="{{ route("teams.show", $set -> loser -> id) }}"><img class="inline-block w-16 sm:w-24 h-16 sm:h-24" src="{{ asset($set -> loser -> logo) }}" alt="{{ $set -> loser -> name }} Logo"></a>
    </div>

    <span class="text-2xl font-bold">{{ $set -> datetime -> format($dateFormat) }}</span>
</div>
