<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Alberto Sánchez Torreblanca">
    <meta name="copyright" content="Alberto Sánchez Torreblanca">
    <meta name="robots" content="noindex,nofollow">
    @vite(["resources/js/app.js", "resources/css/app.css"])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <link rel="icon" href="{{ asset("icon.png") }}">
    <title>{{ config("app.name") }} - {{ $title }}</title>
</head>
