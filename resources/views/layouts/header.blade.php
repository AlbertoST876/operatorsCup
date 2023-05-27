<header class="block w-full p-4 bg-black">
    <nav class="flex max-w-screen-xl mx-auto flex-wrap items-center justify-between">
        <a href="{{ route("index") }}"><img class="w-16 h-16" src="{{ asset("icon.png") }}" alt="Operator's Cup Logo"></a>

        <div class="flex lg:order-2">
            <div class="inline-flex items-center justify-between">
                <a class="mx-2" target="_blank" href="https://discord.gg/a3RBT2NEVQ"><img class="w-8 h-8 rounded-md" src="{{ asset("storage/images/social-networks/discord.png") }}" alt="Twitter"></a>
                <a class="mx-2" target="_blank" href="https://twitter.com/OperatorsCup"><img class="w-8 h-8 rounded-md" src="{{ asset("storage/images/social-networks/twitter.png") }}" alt="Twitter"></a>
                <a class="mx-2" target="_blank" href="https://twitch.tv/operatorscupr6"><img class="w-8 h-8 rounded-md" src="{{ asset("storage/images/social-networks/twitch.png") }}" alt="Twitch"></a>
                <a class="mx-2" target="_blank" href="https://youtube.com/@OperatorsCup"><img class="w-8 h-8 rounded-md" src="{{ asset("storage/images/social-networks/youtube.png") }}" alt="Youtube"></a>
            </div>

            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex m-4 p-2 items-center text-sm text-white rounded-lg lg:hidden hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-white" aria-controls="navbar-default" aria-expanded="false">
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">@lang("app.open_navbar")</span>
            </button>
        </div>

        <div class="hidden lg:flex w-full lg:w-auto lg:items-center lg:justify-between lg:order-1 " id="navbar-default">
            <ul class="flex mt-4 lg:mt-0 p-4 lg:p-0 flex-col lg:flex-row lg:space-x-4 space-y-2 lg:space-y-0 font-bold">
                <li class="transition-all duration-300 hover:bg-white rounded-lg"><a href="{{ route("index") }}" class="block px-4 py-2 text-lg text-white hover:text-black md:hover:bg-transparent rounded-0 md:rounded-lg">@lang("app.home")</a></li>
                <li class="transition-all duration-300 hover:bg-white rounded-lg"><a href="{{ route("rules") }}" class="block px-4 py-2 text-lg text-white hover:text-black md:hover:bg-transparent rounded-0 md:rounded-lg">@lang("app.rules")</a></li>
                <li class="transition-all duration-300 hover:bg-white rounded-lg"><a href="{{ route("teams.index") }}" class="block px-4 py-2 text-lg text-white hover:text-black md:hover:bg-transparent rounded-0 md:rounded-lg">@lang("app.teams")</a></li>
                <li class="transition-all duration-300 hover:bg-white rounded-lg"><a href="{{ route("calendar.index") }}" class="block px-4 py-2 text-lg text-white hover:text-black md:hover:bg-transparent rounded-0 md:rounded-lg">@lang("app.calendar")</a></li>
                <li class="transition-all duration-300 hover:bg-white rounded-lg"><a href="{{ route("ranking.index") }}" class="block px-4 py-2 text-lg text-white hover:text-black md:hover:bg-transparent rounded-0 md:rounded-lg">@lang("app.ranking")</a></li>
                <li class="transition-all duration-300 hover:bg-white rounded-lg"><a href="{{ route("stats") }}" class="block px-4 py-2 text-lg text-white hover:text-black md:hover:bg-transparent rounded-0 md:rounded-lg">@lang("app.stats")</a></li>
            </ul>
        </div>
    </nav>
</header>
