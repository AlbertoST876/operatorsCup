<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.about_us")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <h1 class="block my-8 text-4xl sm:text-6xl font-black">{{ mb_strtoupper(__("app.about_us")) }}</h1>

                <hr>

                <img class="block w-full my-8 rounded-lg" src="{{ asset("storage/images/banners/Banner1.jpg") }}" alt="Operator's Cup Banner">

                <p class="block my-8 text-justify text-lg font-bold">@lang("app.history_about")</p>

                <div class="mt-16 mb-8">
                    <h2 class="block my-2 text-2xl sm:text-4xl font-black">@lang("app.history")</h2>

                    <hr>

                    <div class="my-8">
                        <h3 class="block mt-8 mb-4 text-xl sm:text-2xl font-black">@lang("app.opening")</h3>

                        <p class="block my-4 text-justify text-lg">@lang("app.history_opening")</p>

                        <div class="block sm:flex w-full my-4 sm:flex-wrap sm:items-center sm:justify-center">
                            <img class="block sm:inline-block h-28 mx-auto sm:mx-0 my-4" src="{{ asset("storage/images/sponsors/NK.png") }}" alt="Night Knight Logo">
                        </div>
                    </div>

                    <div class="my-8">
                        <h3 class="block mt-8 mb-4 text-xl sm:text-2xl font-black">@lang("app.season") 1 (2021)</h3>

                        <p class="block my-4 text-justify text-lg">@lang("app.history_season1")</p>

                        <div class="block sm:flex w-full my-4 sm:flex-wrap sm:items-center sm:justify-center">
                            <img class="block sm:inline-block h-28 mx-auto sm:mr-16 my-4" src="{{ asset("storage/images/sponsors/NK.png") }}" alt="Night Knight Logo">
                            <img class="block sm:inline-block h-24 mx-auto sm:ml-16 my-4" src="{{ asset("storage/images/sponsors/SicaGames.png") }}" alt="Sica Games Logo">
                        </div>
                    </div>

                    <div class="my-8">
                        <h3 class="block mt-8 mb-4 text-xl sm:text-2xl font-black">@lang("app.season") 2 (2022)</h3>

                        <p class="block my-4 text-justify text-lg">@lang("app.history_season2")</p>

                        <div class="block sm:flex w-full my-4 sm:flex-wrap sm:items-center sm:justify-center">
                            <img class="block sm:inline-block h-28 mx-auto sm:mr-16 my-4" src="{{ asset("storage/images/sponsors/NK.png") }}" alt="Night Knight Logo">
                            <img class="block sm:inline-block h-24 mx-auto sm:mx-16 my-4" src="{{ asset("storage/images/sponsors/BH.png") }}" alt="Sica Games Logo">
                            <img class="block sm:inline-block h-28 mx-auto sm:ml-16 my-4 rounded-full" src="{{ asset("storage/images/sponsors/ZP.png") }}" alt="Night Knight Logo">
                        </div>
                    </div>

                    <div class="my-8">
                        <h3 class="block mt-8 mb-4 text-xl sm:text-2xl font-black">@lang("app.season") 3 (@lang("app.cancelled"))</h3>

                        <p class="block my-4 text-justify text-lg">@lang("app.history_season3a")</p>
                        <p class="block my-4 text-justify text-lg">@lang("app.history_season3b")</p>
                        <p class="block my-4 text-justify text-lg">@lang("app.history_season3c")</p>
                        <p class="block my-4 text-justify text-lg">@lang("app.history_season3d")</p>
                        <p class="block my-4 text-justify text-lg">@lang("app.history_season3e")</p>
                    </div>
                </div>

                <!--
                <div class="mt-16 mb-8">
                    <h2 class="block my-2 text-2xl sm:text-4xl font-black">@lang("app.staff")</h2>

                    <hr>

                    <div class="flex flex-wrap items-center justify-center"></div>
                </div>
                -->
            </div>
        </main>

        @include("layouts.footer")
    </body>
</html>
