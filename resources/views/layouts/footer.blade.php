@if (!isset($fullWidth))
    @php $fullWidth = true; @endphp
@endif

<footer class="block w-auto mt-8 {{ $fullWidth ? "" : "lg:ml-80" }} p-4 bg-gray-100">
    @if ($fullWidth)
        <div class="max-w-screen-xl mx-auto">
    @endif

    <div class="block lg:flex lg:items-center lg:justify-between">
        <div class="block mr-8">
            <span class="inline-block text-lg font-medium text-black">&copy;{{ date("Y") }} <a href="{{ route("index") }}" class="hover:underline">{{ config("app.name") }}</a>.</span>
            <span class="inline-block text-lg font-medium text-black">@lang("app.all_rights_reserved").</span>
        </div>

        <ul class="block sm:flex mt-4 lg:mt-0 sm:flex-wrap sm:items-center space-y-1 sm:space-y-0 text-lg font-medium text-black">
            <li><a href="{{ route("about") }}" class="mr-8 hover:underline">@lang("app.about_us")</a></li>
            <li><a href="{{ route("privacyPolicy") }}" class="mr-8 hover:underline">@lang("app.privacy_policy")</a></li>
            <li><a href="{{ route("license") }}" class="mr-8 hover:underline">@lang("app.license")</a></li>

            <li data-dropdown-toggle="contact" data-dropdown-placement="top-end" class="hover:underline">
                @lang("app.contact")
                <svg class="inline-block w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>

                <div id="contact" class="hidden w-auto z-10 p-4 bg-black rounded-lg shadow">
                    <a class="block mx-4 my-2 text-white text-lg hover:underline" href="mailto:operatorscup2023@gmail.com">operatorscup2023@gmail.com</a>
                    <a class="inline-block mx-4 my-2 text-white text-lg hover:underline" href="tel:+34633913686">+34 633 91 36 86</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="flex mt-6 flex-wrap items-center justify-between">
        @php $linkLocale = app() -> getLocale() == "en" ? "gb" : app() -> getLocale(); @endphp

        <a class="my-4" target="_blank" href="https://ubisoft.com/{{ app() -> getLocale() . "-" . $linkLocale }}"><img class="h-20" src="{{ asset("storage/images/Ubisoft.png") }}" alt="Ubisoft Logo"></a>
        <a class="my-4" target="_blank" href="https://ubisoft.com/{{ app() -> getLocale() . "-" . $linkLocale }}/game/rainbow-six/siege"><img class="h-20" src="{{ asset("storage/images/R6.png") }}" alt="Rainbow Six Siege Logo"></a>
    </div>

    @if ($fullWidth)
        </div>
    @endif
</footer>
