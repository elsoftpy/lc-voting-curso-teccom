<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600&display=swap" rel="stylesheet" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-background-gray text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#">
                Logo Teccom
            </a>

            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>
        <main class="container mx-auto flex max-w-custom">
            <div class="w-70 mr-5">
                el formulario de ideas está acá Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, repudiandae quaerat et cupiditate suscipit animi facere officia accusantium cumque veritatis! Adipisci fugiat itaque alias labore quisquam tempore omnis optio, totam libero amet voluptatum nisi rem, cumque nesciunt aut molestias consequatur?
            </div>
            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase border-b-4 pb-3 font-semibold space-x-10">
                        <li>
                            <a class="border-b-4 border-blue pb-3" href="#">Todas las ideas (87)</a>
                        </li>
                        <li>
                            <a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue" href="#">En consideración (6)</a>
                        </li>
                        <li>
                            <a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue" href="#">En progreso (1)</a>
                        </li>
                    </ul>
                    <ul class="flex uppercase border-b-4 pb-3 font-semibold space-x-10">
                        <li>
                            <a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue" href="#">Implementadas (10)</a>
                        </li>
                        <li>
                            <a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue" href="#">Cerradas (55)</a>
                        </li>
                    </ul>
                </nav>
                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
