<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $header ?? null }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        [x-cloak] {
            display: none;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

    </style>
    @stack('styles')
    @livewireStyles
    @bukStyles
</head>

<body class="">
    <div class="flex h-screen overflow-hidden" x-data="{ leftSidebar: false, profileDropdown: false}">
        <!-- Left Sidebar -->
        <x-sidebar.left />
        <!-- Main -->
        <div class="flex flex-col flex-1 w-0 overflow-hidden">
            <main class="relative z-0 flex-1 overflow-y-auto focus:outline-none" tabindex="0">
                <div class="pt-2 pb-6 md:py-6">
                    <!-- Header -->
                    <div class="px-4 mx-auto sm:px-6 md:px-8">
                        <div class="grid grid-cols-2 px-4 pb-5 mb-5 border-b border-gray-200 sm:px-6 md:px-0">
                            <!-- Title -->
                            <div>
                                <h1 class="text-2xl font-bold leading-9 text-gray-700">
                                    {{ $header ?? null }}
                                </h1>
                                <p class="max-w-2xl mt-1 text-sm text-gray-500">{{ $desc ?? '' }}</p>
                            </div>

                            <!-- Description -->
                            <div class="relative inline-grid float-right ml-3">
                                <div>
                                    <button @click="profileDropdown = true" class="flex items-center float-right max-w-xs text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50" id="user-menu" aria-haspopup="true">
                                        <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="">
                                        <span class="hidden ml-3 text-sm font-medium text-gray-700 lg:block"><span class="sr-only">Open user menu for </span>{{ Auth::user()->name }}</span>
                                        <!-- Heroicon name: chevron-down -->
                                        <svg class="flex-shrink-0 hidden w-5 h-5 ml-1 text-gray-400 lg:block"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <div x-cloak x-show="profileDropdown" @click.away="profileDropdown = false"
                                    class="absolute right-0 w-48 py-1 mt-12 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

                                    <div class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <x-form-button action="/user/profile" method="GET">
                                            Your Profile
                                        </x-form-button>
                                    </div>
                                    <div class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <x-logout>Log Out</x-logout>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="px-4 max-w-8xl sm:px-6 md:px-8">
                        {{ $slot ?? null }}
                    </div>
                </div>
            </main>
        </div>
    </div>


    @stack('modals')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    @bukScripts
</body>

</html>
