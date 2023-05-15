<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => "Inicio"])

    <body>
        <header>
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path></svg>
            </button>

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
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">HOME</a></li>
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">RULES</a></li>
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">TEAMS</a></li>
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">CALENDAR</a></li>
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">RANKING</a></li>
                        <li class="transition-all duration-500 hover:bg-white"><a href="{{ route("index") }}" class="flex items-center px-8 py-4 text-xl text-white rounded-lg hover:text-black">STATS</a></li>
                    </ul>

                    <div class="flex px-8 py-4 items-center justify-between">
                        <a class="w-8 h-8" target="_blank" href="https://twitter.com/OperatorsCup"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitter.png") }}" alt="Twitter"></a>
                        <a class="w-8 h-8" target="_blank" href="https://twitch.tv/operatorscupr6"><img class="rounded-md" src="{{ asset("storage/images/social-networks/twitch.png") }}" alt="Twitch"></a>
                        <a class="w-8 h-8" target="_blank" href="https://youtube.com/@OperatorsCup"><img class="rounded-md" src="{{ asset("storage/images/social-networks/youtube.png") }}" alt="Youtube"></a>
                    </div>
                </div>
            </aside>
        </header>

        <main class="lg:ml-80 p-4">
            <h1 class="block text-center text-4xl sm:text-6xl font-black">OPERATOR'S CUP<br>SEASON 3</h1>

            <div id="carousel" class="relative w-auto h-36 sm:h-52 md:h-64 lg:h-80 xl:h-96 2xl:h-[500px] my-8" data-carousel="slide">
                <div class="relative h-full overflow-hidden rounded-lg">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset("storage/images/Banner1.jpg") }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Operator's Cup Banner">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset("storage/images/Banner2.jpg") }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Rainbow Six Siege">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset("storage/images/Banner3.jpg") }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Operation Commanding Force">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset("storage/images/Banner4.jpg") }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Brava">
                    </div>
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
                        <span class="sr-only">Previous</span>
                    </span>
                </button>

                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full border sm:w-10 sm:h-10 bg-black/30 group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <div class="block w-full">
                <h2 class="block my-4 text-2xl sm:text-4xl font-black">Novedades de Rainbow Six Siege</h2>

                <article class="my-4">
                    <h3 class="block my-4 text-xl sm:text-2xl font-black">Nueva Operación Commanding Force</h3>

                    <p class="my-4 text-md text-justify">
                        La <strong>Operation Commanding Force</strong> trae a <strong>Brava</strong>, una nueva atacante brasileña, una
                        importante función para abordar el uso de ratón y teclado en consolas, un sistema de recarga inmersiva, nuevas
                        medidas contra el comportamiento tóxico, etc.
                    </p>
                </article>

                <article class="my-4">
                    <h3 class="block my-4 text-xl sm:text-2xl font-black">Nueva Operadora Brava</h3>

                    <div class="flex items-center">
                        <img class="block w-56 mr-8" src="{{ asset("storage/images/Brava.png") }}" alt="Brava">

                        <div>
                            <p class="my-4 text-md text-justify">
                                <strong>Nayara Brava Cardoso</strong>, es una operadora atacante introducida en la Operación Commanding
                                Force.
                            </p>

                            <p class="my-4 text-md text-justify">
                                El dispositivo único de <strong>Brava</strong> es el <strong>Kludge Drone</strong>, un dron remoto
                                equipado con un láser electrónico. Cuando está dentro del alcance y la línea de visión de un dispositivo
                                electrónico de los defensores, Brava puede piratear el dispositivo, ya sea haciendo que se autodestruya
                                o usando sus efectos en contra de los defensores, que de otro modo no se verían afectados.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </main>

        <footer class="block mt-4 lg:ml-80 p-4 bg-gray-100 rounded-lg shadow">
            <div class="block w-full md:flex md:items-center md:justify-between">
                <span class="text-lg font-medium text-black sm:text-center">&copy;{{ date("Y") }} <a href="{{ route("index") }}" class="hover:underline">Operator's Cup</a>. All Rights Reserved.</span>

                <ul class="flex flex-wrap items-center mt-3 text-lg font-medium text-black sm:mt-0">
                    <li><a href="{{ route("index") }}" class="mr-4 md:mr-6 hover:underline">About</a></li>
                    <li><a href="{{ route("index") }}" class="mr-4 md:mr-6 hover:underline">Privacy Policy</a></li>
                    <li><a href="{{ route("index") }}" class="mr-4 md:mr-6 hover:underline">Licensing</a></li>
                    <li><a href="{{ route("index") }}" class="hover:underline">Contact</a></li>
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
