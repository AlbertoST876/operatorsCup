<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.privacy_policy")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                @php
                    $date = new DateTime("2023-05-30");
                @endphp

                <h1 class="block mt-8 mb-4 text-4xl font-black">{{ mb_strtoupper(__("app.privacy_policy")) }}</h1>
                <h2 class="block mb-8 text-2xl font-black">@lang("app.last_update"): {{ $date -> format($dateFormat) }}</h2>

                <hr>

                <div class="my-8">
                    <p class="block my-4 text-justify text-lg font-bold">@lang("app.privacy_policy_header")</p>

                    <ol class="block list-decimal list-inside">
                        <li class="my-4 text-justify text-lg">@lang("app.privacy_policy1")</li>

                        <li class="my-4 text-justify text-lg">
                            @lang("app.privacy_policy2")

                            <ol class="block ml-8 list-disc list-inside">
                                <li class="my-4 text-justify text-lg">@lang("app.privacy_policy2a")</li>
                                <li class="my-4 text-justify text-lg">@lang("app.privacy_policy2b")</li>
                                <li class="my-4 text-justify text-lg">@lang("app.privacy_policy2c")</li>
                                <li class="my-4 text-justify text-lg">@lang("app.privacy_policy2d")</li>
                                <li class="my-4 text-justify text-lg">@lang("app.privacy_policy2e")</li>
                                <li class="my-4 text-justify text-lg">@lang("app.privacy_policy2f")</li>
                                <li class="my-4 text-justify text-lg">@lang("app.privacy_policy2g")</li>
                            </ol>
                        </li>

                        <li class="my-4 text-justify text-lg">
                            @lang("app.privacy_policy3")

                            <ol class="block ml-8 list-disc list-inside">
                                <li class="my-4 text-justify text-lg">@lang("app.privacy_policy3a")</li>
                                <li class="my-4 text-justify text-lg">@lang("app.privacy_policy3b")</li>
                                <li class="my-4 text-justify text-lg">@lang("app.privacy_policy3c")</li>
                            </ol>
                        </li>

                        <li class="my-4 text-justify text-lg">@lang("app.privacy_policy4")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.privacy_policy5")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.privacy_policy6")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.privacy_policy7")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.privacy_policy8")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.privacy_policy9")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.privacy_policy10")</li>
                        <li class="my-4 text-justify text-lg">@lang("app.privacy_policy11")</li>
                    </ol>

                    <p class="block my-4 text-justify text-lg font-bold">@lang("app.privacy_policy_footer1")</p>
                </div>
            </div>
        </main>

        @include("layouts.footer")
    </body>
</html>
