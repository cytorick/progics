<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full">
    <div class="min-h-full bg-white py-16 px-6 sm:py-24 md:grid md:place-items-center lg:px-8">
        <div class="mx-auto max-w-max">
            <main class="sm:flex">
                <img src="{{ asset('images/progics-logo.svg') }}" alt="Progics Logo" class="h-36">
                <div class="sm:ml-6">
                    <div class="sm:border-l sm:border-gray-200 sm:pl-6">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Onze nieuwe website is onderweg...</h1>
                        <p class="mt-1 text-base text-gray-500"></p>
                    </div>
                    <div class="mt-10 flex space-x-3 sm:border-l sm:border-transparent sm:pl-6">
                        <a href="mailto:info@progics.nl" class="inline-flex items-center rounded-md border border-transparent bg-progics100 px-4 py-2 text-sm font-medium text-white hover:bg-progics focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Neem contact met ons op!</a>
                    </div>
                </div>
            </main>
        </div>
    </div>

    </body>
</html>
