<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
{{--        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">--}}

        <title>{{ config('app.name', 'PROGICS') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full">
    <div class="flex min-h-full flex-col bg-white lg:relative">
        <div class="flex flex-grow flex-col">
            <main class="flex flex-grow flex-col bg-white">
                <div class="mx-auto flex w-full max-w-7xl flex-grow flex-col px-6 lg:px-8">
                    <div class="flex-shrink-0 pt-10 sm:pt-16">
                        <a href="/" class="inline-flex">
                            <span class="sr-only">Your Company</span>
                            <img class="h-12 w-auto hidden sm:block" src="{{ asset('images/progics-icon.png') }}" alt="">
                        </a>
                    </div>
                    <div class="sm:hidden my-auto flex-shrink-0 py-16 sm:py-28 text-center justify-items-center justify-center items-center">
                        <img class="h-20 w-auto relative mb-20 mx-auto" src="{{ asset('images/progics-logo.svg') }}" alt="PROGICS logo">
                        <p class="text-base font-semibold text-progics">Binnenkort</p>
                        <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Nog even wachten...</h1>
                        <p class="mt-2 text-base text-gray-500">En dan is de nieuwe website van Progics klaar!</p>
                        <div class="mt-6">
                            <a href="mailto:info@progics.nl" class="text-base font-medium text-progics hover:text-progics100">
                                Stuur ons een email
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </div>
                    </div>
                    <div class="hidden sm:block my-auto flex-shrink-0 py-16 sm:py-28">
                        <p class="text-base font-semibold text-progics">Binnenkort</p>
                        <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Nog even wachten...</h1>
                        <p class="mt-2 text-base text-gray-500">En dan is de nieuwe website van Progics klaar!</p>
                        <div class="mt-6">
                            <a href="mailto:info@progics.nl" class="text-base font-medium text-progics hover:text-progics100">
                                Stuur ons een email
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <div class="hidden lg:absolute lg:inset-y-0 lg:right-0 lg:block lg:w-1/2">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('images/Middel 3.png') }}" alt="">
        </div>
    </div>


    </body>
</html>
