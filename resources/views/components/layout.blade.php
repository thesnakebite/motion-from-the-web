<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles / Scripts -->
        @php
            $cssPath = 'resources/css/' . ($stylesheet ?? 'app.css');
            $jsPath = 'resources/js/' . ($script ?? 'app.js');
            @endphp

        @vite(['resources/css/app.css', $cssPath, $jsPath])
        <!-- Orden de carga -->
        <link rel="stylesheet" href="/animations.css" media="(prefers-reduced-motion: no-preference)">
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
