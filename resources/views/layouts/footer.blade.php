<footer class="block w-auto mt-8 {{ $isIndex ? "lg:ml-80" : "" }} p-4 bg-gray-100">
    @if (!$isIndex)
        <div class="max-w-screen-xl mx-auto">
    @endif

    <div class="block md:flex md:items-center md:justify-between">
        <span class="text-lg font-medium text-black sm:text-center">&copy;{{ date("Y") }} <a href="{{ route("index") }}" class="hover:underline">Operator's Cup</a>. @lang("app.all_rights_reserved").</span>

        <ul class="flex mt-4 md:mt-0 flex-wrap items-center text-lg font-medium text-black">
            <li><a href="{{ route("index") }}" class="mr-8 hover:underline">@lang("app.about_us")</a></li>
            <li><a href="{{ route("privacyPolicy") }}" class="mr-8 hover:underline">@lang("app.privacy_policy")</a></li>
            <li><a href="{{ route("license") }}" class="mr-8 hover:underline">@lang("app.license")</a></li>
            <li><a href="mailto:operatorscup2023@gmail.com" class="hover:underline">@lang("app.contact")</a></li>
        </ul>
    </div>

    <div class="flex mt-8 flex-wrap items-center justify-between space-y-4">
        @php $linkLocale = app() -> getLocale() == "en" ? "gb" : app() -> getLocale(); @endphp

        <a target="_blank" href="https://ubisoft.com/{{ app() -> getLocale() . "-" . $linkLocale }}"><img class="h-20" src="{{ asset("storage/images/Ubisoft.png") }}" alt="Ubisoft"></a>
        <a target="_blank" href="https://ubisoft.com/{{ app() -> getLocale() . "-" . $linkLocale }}/game/rainbow-six/siege"><img class="h-20" src="{{ asset("storage/images/R6.png") }}" alt="Rainbow Six Siege"></a>
    </div>

    @if (!$isIndex)
        </div>
    @endif
</footer>
