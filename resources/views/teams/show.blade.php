<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.teams") . " - " . $team -> name])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <div class="flex my-4 flex-nowrap items-center">
                    <img class="mr-4 w-40 h-40" src="{{ asset($team -> logo) }}" alt="{{ $team -> name }} Logo">
                    <h1 class="block text-4xl sm:text-6xl font-black">{{ mb_strtoupper($team -> name) }}</h1>
                </div>

                <div class="grid my-8 gap-4 sm:gap-8 grid-cols-1 sm:grid-cols-2">
                    <div>
                        <h2 class="block my-2 text-2xl sm:text-4xl font-black">@lang("app.information")</h2>

                        <hr>

                        <div class="my-4">
                            <p class="block my-2 text-lg sm:text-2xl font-bold">@lang("app.points"): <span class="font-normal">{{ $team -> points }}</span></p>
                            <p class="block my-2 text-lg sm:text-2xl font-bold">@lang("app.matches"): <span class="font-normal">{{ count($team -> sets) }}</span></p>
                        </div>
                    </div>

                    <div>
                        <h2 class="block my-2 text-2xl sm:text-4xl font-black">@lang("app.social_networks")</h2>

                        <hr>

                        <div class="flex flex-wrap md:flex-nowrap items-center justify-center">
                            @if (!is_null($team -> discord)) <a class="mx-2 my-4 w-12 h-12" target="_blank" href="{{ $team -> discord }}"><img class="rounded-md" src="{{ asset("storage/images/social-networks/discord.png") }}" alt="Discord"></a> @endif
                            @if (!is_null($team -> twitter)) <a class="mx-2 my-4 w-12 h-12" target="_blank" href="{{ $team -> twitter }}"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitter.png") }}" alt="Twitter"></a> @endif
                            @if (!is_null($team -> twitch)) <a class="mx-2 my-4 w-12 h-12" target="_blank" href="{{ $team -> twitch }}"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitch.png") }}" alt="Twitch"></a> @endif
                            @if (!is_null($team -> youtube)) <a class="mx-2 my-4 w-12 h-12" target="_blank" href="{{ $team -> youtube }}"><img class="rounded-md" src="{{ asset("storage/images/social-networks/youtube.png") }}" alt="YouTube"></a> @endif
                        </div>
                    </div>
                </div>

                <div class="my-8">
                    <h2 class="block my-2 text-2xl sm:text-4xl font-black">@lang("app.members")</h2>

                    <hr>

                    <div class="grid my-4 gap-4 sm:gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
                        @foreach ($team -> members as $member)
                            <div class="flex px-4 py-2 flex-nowrap items-center justify-between bg-gray-100 rounded-lg">
                                <div>
                                    <span class="block text-lg">{{ $member -> role -> name }}</span>
                                    <span class="block text-xl font-bold">{{ $member -> nickname }}</span>
                                </div>

                                <div class="flex flex-nowrap items-center justify-center">
                                    @if (!is_null($member -> twitter)) <a class="mx-1 my-2 w-8 h-8" target="_blank" href="{{ $member -> twitter }}"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitter.png") }}" alt="Twitter"></a> @endif
                                    @if (!is_null($member -> twitch)) <a class="mx-1 my-2 w-8 h-8" target="_blank" href="{{ $member -> twitch }}"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitch.png") }}" alt="Twitch"></a> @endif
                                    @if (!is_null($member -> youtube)) <a class="mx-1 my-2 w-8 h-8" target="_blank" href="{{ $member -> youtube }}"><img class="rounded-md" src="{{ asset("storage/images/social-networks/youtube.png") }}" alt="YouTube"></a> @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="my-8">
                    <h2 class="block my-2 text-2xl sm:text-4xl font-black">@lang("app.matches")</h2>

                    <hr>

                    <div class="grid my-4 gap-4 sm:gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                        @foreach ($team -> sets as $set)
                            @include("layouts.calendar.set", [
                                "set" => $set,
                                "games" => $set -> games,
                            ])
                        @endforeach
                    </div>
                </div>
            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
