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
    <div class="flex flex-col flex-1 w-0 min-h-screen overflow-hidden">
        <main class="relative z-0 flex-1 overflow-y-auto focus:outline-none" tabindex="0">
            <div class="pt-2 pb-6 md:py-6">
                <!-- Header -->
                <div class="px-4 mx-auto sm:px-6 md:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 px-4 pb-5 mb-5 border-b border-gray-200 sm:px-6 md:px-0">
                        <!-- Title -->
                        <div>
                            <h1 class="text-2xl font-bold leading-9 text-gray-700">
                                {{ $header ?? null }}
                            </h1>
                            <p class="max-w-2xl mt-1 text-sm text-gray-500">{{ $desc ?? '' }}</p>
                        </div>

                        <!-- Dropdown -->
                        <x-dropdown.profile />
                        <!-- Morning Bar -->
                            <!-- TODO Good Morning Bar -->
                        </div>
                    </div>

                <!-- Body -->
                <div class="px-6 max-w-screen md:px-8">
                    {{ $slot ?? null }}
                </div>
            </div>
        </main>
    </div>
</div>


@stack('modals')
@livewireScripts
@bukScripts
</body>

</html>
