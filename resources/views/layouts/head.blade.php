<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(["resources/js/app.js", "resources/css/app.css"])
    <link rel="icon" href="{{ asset("icon.png") }}">
    <title>{{ config("app.name") }} - {{ $title }}</title>
</head>
