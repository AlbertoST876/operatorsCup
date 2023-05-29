<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.calendar")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <div class="mt-8 mb-16">
                    <h1 class="block text-4xl sm:text-6xl font-black">{{ mb_strtoupper(__("app.calendar")) }}</h1>

                    <div class="flex flex-wrap items-center">
                        @foreach ($workdays as $workday)
                            @if (count($workday -> sets) > 0)
                                <a class="mr-2 my-2 px-4 py-2 text-xl text-white bg-black rounded-lg" href="#{{ $workday -> id }}">{{ $workday -> id }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>

                @foreach ($workdays as $workday)
                    @if (count($workday -> sets) > 0)
                        <div class="mb-16">
                            <h2 id="{{ $workday -> id }}" class="block my-2 text-2xl sm:text-4xl font-black">{{ $workday -> name }}</h2>

                            <hr>

                            <div class="grid my-4 gap-4 sm:gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                                @foreach ($workday -> sets as $set)
                                    @include("layouts.calendar.set", [
                                        "set" => $set,
                                        "games" => $set -> games,
                                    ])
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
