@props(['title'])
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link scroll reveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Blog Mito | {{ $title }}</title>
    {{-- import tailwind --}}
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.navbar._navbar')
    @include('partials._session')
    {{ $slot }}
    @vite('resources/js/app.js')
</body>
</html>