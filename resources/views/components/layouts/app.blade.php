<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite(['resources/scss/app.scss'])
    </head>
    <body>
        <div class="container py-5">
            {{ $slot }}
        </div>
    </body>
</html>
