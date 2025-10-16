<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 12 + Tailwind + Alpine JS - Product Management</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Alpine js --}}
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body class="bg-gray-200 text-gray-800">
        <div class="container mx-auto mt-8">
            <h1 class="mb-6 border-b-2 border-gray-300 pb-3 text-3xl font-bold">
                Laravel 12 + Tailwind + Alpine.js Starter UI - Product Management
            </h1>

            @yield('content')
        </div>

        {{-- Lucide icon --}}
        <script src="https://unpkg.com/lucide@latest"></script>
        <script>
            lucide.createIcons();
        </script>
    </body>
</html>
