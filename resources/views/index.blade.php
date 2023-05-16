<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.home")])

    <body>
        <header>
            <div class="block w-full bg-black">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mx-4 my-2 text-sm text-white rounded-lg lg:hidden hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path></svg>
                    <span class="sr-only">@lang("app.open_sidebar")</span>
                </button>
            </div>

            <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-80 h-screen transition-transform -translate-x-full lg:translate-x-0" aria-label="Sidebar">
                <div class="h-full overflow-y-auto bg-black">
                    <a href="{{ route("index") }}" class="flex mt-8 mb-2 items-center justify-center"><img src="{{ asset("icon.png") }}" class="h-64" alt="Operator's Cup Logo"></a>

                    <div>
                        <button id="languageButton" data-dropdown-toggle="language" class="flex mx-auto px-4 py-2 items-center text-white font-medium rounded-lg text-sm text-center hover:bg-white hover:text-black focus:ring-4 focus:outline-none focus:ring-white" type="button">
                            @switch(session() -> get("locale"))
                                @case("en") <img src="{{ asset("storage/images/flags/en.png") }}" width="25px"> @break
                                @case("es") <img src="{{ asset("storage/images/flags/es.png") }}" width="25px"> @break
                                @default <img src="{{ asset("storage/images/flags/es.png") }}" width="25px">
                            @endswitch

                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>

                        <div id="language" class="hidden w-44 z-10 bg-white rounded-lg shadow">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="languageButton">
                                <li><a href="lang/en" class="block px-4 py-2 text-left hover:bg-gray-100"><img class="inline-block mr-2" src="{{ asset("storage/images/flags/en.png") }}" width="25px">@lang("app.english")</a></li>
                                <li><a href="lang/es" class="block px-4 py-2 text-left hover:bg-gray-100"><img class="inline-block mr-2" src="{{ asset("storage/images/flags/es.png") }}" width="25px">@lang("app.spanish")</a></li>
                            </ul>
                        </div>
                    </div>

                    <ul class="my-8 space-y-2 font-bold">
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">{{ mb_strtoupper(__("app.home")) }}</a></li>
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">{{ mb_strtoupper(__("app.rules")) }}</a></li>
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">{{ mb_strtoupper(__("app.teams")) }}</a></li>
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">{{ mb_strtoupper(__("app.calendar")) }}</a></li>
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">{{ mb_strtoupper(__("app.ranking")) }}</a></li>
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">{{ mb_strtoupper(__("app.stats")) }}</a></li>
                    </ul>

                    <div class="flex px-8 py-4 items-center justify-between">
                        <a class="w-8 h-8" target="_blank" href="https://twitter.com/OperatorsCup"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitter.png") }}" alt="Twitter"></a>
                        <a class="w-8 h-8" target="_blank" href="https://twitch.tv/operatorscupr6"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitch.png") }}" alt="Twitch"></a>
                        <a class="w-8 h-8" target="_blank" href="https://youtube.com/@OperatorsCup"><img class="rounded-md" src="{{ asset("storage/images/social-networks/youtube.png") }}" alt="Youtube"></a>
                    </div>
                </div>
            </aside>
        </header>

        <main class="lg:ml-80">
            <div class="px-4 py-2 bg-gradient-to-b from-black from-25% to-white">
                <h1 class="block mb-8 text-white text-center text-4xl sm:text-6xl font-black">OPERATOR'S CUP<br>{{ mb_strtoupper(__("app.season")) }} 3</h1>

                <div id="carousel" class="relative w-auto h-36 sm:h-52 md:h-64 lg:h-80 xl:h-96 2xl:h-[500px]" data-carousel="slide">
                    <div class="relative h-full overflow-hidden rounded-lg">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item><img src="{{ asset("storage/images/Banner1.jpg") }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Operator's Cup Banner"></div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item><img src="{{ asset("storage/images/Banner2.jpg") }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Rainbow Six Siege"></div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item><img src="{{ asset("storage/images/Banner3.jpg") }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Operation Dread Factor"></div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item><img src="{{ asset("storage/images/Banner4.jpg") }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Fenrir"></div>
                    </div>

                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-3 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    </div>

                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full border sm:w-10 sm:h-10 bg-black/30 group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-black group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="sr-only">@lang("app.previous")</span>
                        </span>
                    </button>

                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full border sm:w-10 sm:h-10 bg-black/30 group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="sr-only">@lang("app.next")</span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="px-4">
                <h2 class="block my-4 text-2xl sm:text-4xl font-black">@lang("app.whats_new_in") Rainbow Six Siege</h2>

                <article class="my-4">
                    <h3 class="block my-4 text-xl sm:text-2xl font-black">@lang("app.new_operation")</h3>

                    <p class="my-4 text-md text-justify">@lang("app.operation_description")</p>
                </article>

                <article class="my-4">
                    <h3 class="block my-4 text-xl sm:text-2xl font-black">@lang("app.new_operator")</h3>

                    <div class="md:flex md:items-center">
                        <img class="block mx-auto w-56 md:ml-0 md:mr-8" src="{{ asset("storage/images/Fenrir.png") }}" alt="Fenrir">

                        <div>
                            <p class="my-4 text-md text-justify">@lang("app.operator_resume")</p>
                            <p class="my-4 text-md text-justify">@lang("app.operator_description")</p>
                        </div>
                    </div>
                </article>
            </div>
        </main>

        <footer class="block mt-4 lg:ml-80 p-4 bg-gray-100 rounded-lg shadow">
            <div class="block w-full md:flex md:items-center md:justify-between">
                <span class="text-lg font-medium text-black sm:text-center">&copy;{{ date("Y") }} <a href="{{ route("index") }}" class="hover:underline">Operator's Cup</a>. @lang("app.all_rights_reserved").</span>

                <ul class="flex flex-wrap items-center mt-3 text-lg font-medium text-black sm:mt-0">
                    <li><a href="{{ route("index") }}" class="mr-4 md:mr-6 hover:underline">@lang("app.about_us")</a></li>
                    <li><a href="{{ route("index") }}" class="mr-4 md:mr-6 hover:underline">@lang("app.privacy_policy")</a></li>
                    <li><a href="{{ route("index") }}" class="mr-4 md:mr-6 hover:underline">@lang("app.licensing")</a></li>
                    <li><a href="mailto:operatorscup2023@gmail.com" class="hover:underline">@lang("app.contact")</a></li>
                </ul>
            </div>

            <div class="flex mt-6 flex-wrap items-center justify-between space-y-4">
                @php $linkLocale = app() -> getLocale() == "en" ? "gb" : app() -> getLocale(); @endphp

                <a target="_blank" href="https://ubisoft.com/{{ app() -> getLocale() . "-" . $linkLocale }}"><img class="h-24" src="{{ asset("storage/images/Ubisoft.png") }}" alt="Ubisoft"></a>
                <a target="_blank" href="https://ubisoft.com/{{ app() -> getLocale() . "-" . $linkLocale }}/game/rainbow-six/siege"><img class="h-24" src="{{ asset("storage/images/R6.png") }}" alt="Rainbow Six Siege"></a>
            </div>
        </footer>
    </body>
</html>
