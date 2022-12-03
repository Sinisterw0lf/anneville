@props(['title'])
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anneville | {{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials._session')
    <x-navbar.navbar/>
    {{ $slot }}
    <x-footer.footer/>
    @vite('resources/js/app.js')
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>