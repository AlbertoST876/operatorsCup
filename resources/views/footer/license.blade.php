<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.license")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                @php $date = new DateTime("2023-05-30"); @endphp

                <h1 class="block mt-8 mb-4 text-4xl font-black">{{ mb_strtoupper(__("app.end_user_license_terms")) }}</h1>
                <h2 class="block mb-8 text-2xl font-black">@lang("app.last_update"): {{ $date -> format($dateFormat) }}</h2>

                <hr>

                <div class="my-8">
                    <p class="block my-4 text-justify text-lg font-bold">@lang("app.license_header")</p>

                    <ol class="block list-decimal list-inside">
                        <li class="my-4 text-justify text-lg">@lang("app.license1")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.license2")</li>

                        <li class="my-4 text-justify text-lg">
                            @lang("app.license3")

                            <ol class="block ml-8 list-disc list-inside">
                                <li class="my-4 text-justify text-lg">@lang("app.license3a")</li>
                                <li class="my-4 text-justify text-lg">@lang("app.license3b")</li>
                                <li class="my-4 text-justify text-lg">@lang("app.license3c")</li>
                                <li class="my-4 text-justify text-lg">@lang("app.license3d")</li>
                            </ol>
                        </li>

                        <li class="my-4 text-justify text-lg">@lang("app.license4")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.license5")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.license6")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.license7")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.license8")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.license9")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.license10")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.license11")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.license12")</li>
                    </ol>

                    <p class="block my-4 text-justify text-lg font-bold">@lang("app.license_footer1")</p>
                    <p class="block my-4 text-justify text-lg font-bold">@lang("app.license_footer2")</p>
                </div>
            </div>
        </main>

        @include("layouts.footer")
    </body>
</html>
