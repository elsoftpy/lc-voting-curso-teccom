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
        @livewireStyles
    </head>
    <body class="font-sans bg-background-gray text-gray-900 text-sm">
        <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
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
        <main class="container mx-auto flex flex-col md:flex-row max-w-custom">
            <div class="w-70 mx-auto md:mx-2 md:top-8 mr-5">
                <div class="bg-white md:sticky md:top-8 border-2 border-blue rounded-xl mt-16">
                    {{-- titulo --}}
                    <div class="text-center px-6 py-2 pt-6">
                        <h3 class="font-semibold text-base">
                            Agregar una idea
                        </h3>
                        <p class="text-xs mt-4">
                            @auth
                                Tiranos una idea y nosotros la analizaremos
                            @else
                                Por favor, ingresar para crear una idea
                            @endauth
                        </p>
                    </div>
                    {{-- fin del titulo --}}
                    {{-- form --}}
                    @auth
                        <livewire:crear-idea/>
                    @else

                        <div class="my-6 text-center space-x-2">
                            <a href="{{ route('login') }}"
                            class="inline-block justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                            >
                                <span class="ml-1">Login</span>
                            </a>
                            <a
                                href="{{ route('register') }}"
                                class="inline-block justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-4"
                            >
                                Registrarse
                            </a>
                        </div>
                    @endauth
                </div>

                </div>
            </div>
            <div class="w-full md:w-175 px-2 md:px-0">
                <nav class="md:flex hidden items-center justify-between text-xs">
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
        @livewireScripts
    </body>
</html>
