<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $header }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
    
    @stack('styles')
    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
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
</head>

<body class="font-sans antialiased">
    <div class="flex h-screen overflow-hidden" x-data="{ leftSidebar: false, profileDropdown: false}">
        <!-- Sidebars -->
        <x-left_sidebar />

        <div class="flex flex-col flex-1 w-0 overflow-hidden">
            <div class="pt-1 pl-1 md:hidden sm:pl-3 sm:pt-3">

                <!-- Open Sidebar -->
                <button @click="leftSidebar = true"
                    class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150"
                    aria-label="Open sidebar">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <!-- Main -->
            <main class="relative z-0 flex-1 overflow-y-auto focus:outline-none" tabindex="0">
                <div class="pt-2 pb-6 md:py-6">
                    <div class="px-4 mx-auto sm:px-6 md:px-8">
                        <div class="grid grid-cols-2 px-4 pb-5 mb-5 border-b border-gray-200 sm:px-6 md:px-0">
                            <div class="">
                                <h1 class="text-2xl font-bold leading-9 text-gray-700">
                                    {{ $header ?? null }}
                                </h1>
                                <p class="max-w-2xl mt-1 text-sm text-gray-500">{{ $desc ?? '' }}</p>
                            </div>
                            <div class="relative inline-grid float-right ml-3">
                                <div>
                                    <button @click="profileDropdown = true"
                                        class="flex items-center float-right max-w-xs text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50"
                                        id="user-menu" aria-haspopup="true">
                                        <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                                            alt="">
                                        <span class="hidden ml-3 text-sm font-medium text-gray-700 lg:block"><span
                                                class="sr-only">Open user menu for
                                            </span>{{ Auth::user()->name }}</span>
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
                                    <a href="/user/profile"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        role="menuitem">Your Profile</a>
                                    <a href="{{ route('logout') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                                        onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                        Logout
                                    </a>
                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 max-w-8xl sm:px-6 md:px-8">
                        <!-- Replace with your content -->
                        {{ $slot ?? null }}
                        <!-- /End replace -->
                    </div>
                </div>
            </main>
        </div>
    </div>
    @stack('modals')
    @livewireScripts
</body>

</html>
