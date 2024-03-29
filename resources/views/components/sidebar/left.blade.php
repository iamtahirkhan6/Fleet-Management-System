<div class="flex h-screen overflow-hidden bg-gray-100">

    <!-- Static sidebar for mobile -->
    <div class="md:hidden" x-show="leftSidebar" x-cloak>
        <div class="fixed inset-0 z-40 flex">
            <div class="fixed inset-0" aria-hidden="true" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
            </div>
            <div class="relative flex flex-col flex-1 w-full max-w-xs bg-indigo-700" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">
                <div class="absolute top-0 right-0 pt-2 -mr-12">
                    <button @click="leftSidebar = false" class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"> <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: x -->
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /> </svg>
                    </button>
                </div>
                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4"> <img class="w-auto h-8" src="{{ url('/img/theme/logo-transparent.png') }}" alt="MynFlotten"> </div>
                    <nav class="px-2 mt-5 space-y-1">
                        @role('manager')<x-sidebar.link href="{{ route('company.index') }}"><x-svg.company class="w-6 h-6 mr-3 text-indigo-300" /> My Company</x-sidebar.link>@endrole
                        @role('manager')<x-sidebar.link href="{{ route('employees.index') }}"><x-svg.employees class="w-6 h-6 mr-3 text-indigo-300" /> Employees</x-sidebar.link>@endrole
                        @permission('projects-read')<x-sidebar.link href="{{ route('projects.index') }}"><x-svg.projects class="w-6 h-6	mr-3 text-indigo-300" />Projects</x-sidebar.link>@endpermission
                        @permission('consignees-read')<x-sidebar.link href="{{ route('consignees.index') }}"><x-svg.consignees class="w-6 h-6 mr-3 text-indigo-300" /> Consignees</x-sidebar.link>@endpermission
                        @permission('parties-read')<x-sidebar.link href="{{ route('parties.index') }}"><x-svg.parties class="w-6 h-6 mr-3 text-indigo-300" /> Parties</x-sidebar.link>@endpermission
                        @permission('market-vehicles-read')<x-sidebar.link href="{{ route('market-vehicles.index') }}"><x-svg.vehicles class="w-6 h-6 mr-3 text-indigo-300" /> Market Vehicles</x-sidebar.link>@endpermission
                        @permission('payments-read')<x-sidebar.link href="{{ route('payments.index') }}"><x-svg.payments class="w-6 h-6 mr-3 text-indigo-300" /> Payments</x-sidebar.link>@endpermission
                        @permission('fleets-read')<x-sidebar.link href="{{ route('fleets.index') }}"><x-svg.fleets class="w-6 h-6 mr-3 text-indigo-300" /> Fleets</x-sidebar.link>@endpermission
                        @permission('loading-points-read')<x-sidebar.link href="{{ route('loading-points.index') }}"><x-fas-truck-loading class="w-6 h-6 mr-3 text-indigo-300" /> Loading Points</x-sidebar.link>@endpermission
                        @permission('unloading-points-read')<x-sidebar.link href="{{ route('unloading-points.index') }}"><x-tabler-truck-return class="w-6 h-6 mr-3 text-indigo-300" /> UnLoading Points</x-sidebar.link>@endpermission
                        {{--                        @permission('rc-search')<x-sidebar.link href="/search_vehicle_rc"><x-svg.search class="w-6 h-6 mr-3 text-indigo-300" /> Search RC</x-sidebar.link>@endpermission--}}
                        {{--						<x-sidebar.link href="/expenses"><x-svg.expenses class="w-6 h-6 mr-3 text-indigo-300" /> Expenses</x-sidebar.link>--}}
                    </nav>
                    </nav>
                </div>
                <div class="flex flex-shrink-0 p-4 border-t border-indigo-800">
                    <a href="{{ route('profile.show') }}" class="flex-shrink-0 block group">
                        <div class="flex items-center">
                            <div> <img class="inline-block w-10 h-10 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt=""> </div>
                            <div class="ml-3">
                                <p class="text-base font-medium text-white"> {{ auth()->user()->name }} </p>
                                <p class="text-sm font-medium text-indigo-200 group-hover:text-white"> View profile </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden bg-indigo-800 md:flex md:flex-shrink-0">
        <div class="flex flex-col w-60">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-1 h-0">
                <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4"> <img class="w-auto h-8" src="{{ url('/img/theme/logo-transparent.png') }}" alt="MynFlotten"> </div>
                    <nav class="flex-1 px-2 mt-5 space-y-1">
                        <x-sidebar.link href="/dashboard"><x-svg.dashboard class="w-6 h-6 mr-3 text-indigo-300" /> Dashboard</x-sidebar.link>
                        @role('manager')<x-sidebar.link href="{{ route('offices.index') }}"><x-svg.company class="w-6 h-6 mr-3 text-indigo-300" /> Offices</x-sidebar.link>@endrole
                        @role('manager')<x-sidebar.link href="{{ route('employees.index') }}"><x-svg.employees class="w-6 h-6 mr-3 text-indigo-300" /> Employees</x-sidebar.link>@endrole
                        @permission('projects-read')<x-sidebar.link href="{{ route('projects.index') }}"><x-svg.projects class="w-6 h-6	mr-3 text-indigo-300" />Projects</x-sidebar.link>@endpermission
                        @permission('consignees-read')<x-sidebar.link href="{{ route('consignees.index') }}"><x-svg.consignees class="w-6 h-6 mr-3 text-indigo-300" /> Consignees</x-sidebar.link>@endpermission
                        @permission('parties-read')<x-sidebar.link href="{{ route('parties.index') }}"><x-svg.parties class="w-6 h-6 mr-3 text-indigo-300" /> Parties</x-sidebar.link>@endpermission
                        @permission('market-vehicles-read')<x-sidebar.link href="{{ route('market-vehicles.index') }}"><x-svg.vehicles class="w-6 h-6 mr-3 text-indigo-300" /> Market Vehicles</x-sidebar.link>@endpermission
                        @permission('payments-read')<x-sidebar.link href="{{ route('payments.index') }}"><x-svg.payments class="w-6 h-6 mr-3 text-indigo-300" /> Payments</x-sidebar.link>@endpermission
                        @permission('fleets-read')<x-sidebar.link href="{{ route('fleets.index') }}"><x-svg.fleets class="w-6 h-6 mr-3 text-indigo-300" /> Fleets</x-sidebar.link>@endpermission
                        @permission('loading-points-read')<x-sidebar.link href="{{ route('loading-points.index') }}"><x-fas-truck-loading class="w-6 h-6 mr-3 text-indigo-300" /> Loading Points</x-sidebar.link>@endpermission
                        @permission('unloading-points-read')<x-sidebar.link href="{{ route('unloading-points.index') }}"><x-tabler-truck-return class="w-6 h-6 mr-3 text-indigo-300" /> UnLoading Points</x-sidebar.link>@endpermission
                        @permission('payees-read')<x-sidebar.link href="{{ route('payees.index') }}"><x-svg.payee class="w-6 h-6 mr-3 text-indigo-300" /> Payees</x-sidebar.link>@endpermission
                        {{--                        @permission('rc-search')<x-sidebar.link href="/search_vehicle_rc"><x-svg.search class="w-6 h-6 mr-3 text-indigo-300" /> Search RC</x-sidebar.link>@endpermission--}}
                        {{--						<x-sidebar.link href="/expenses"><x-svg.expenses class="w-6 h-6 mr-3 text-indigo-300" /> Expenses</x-sidebar.link>--}}
                    </nav>
                </div>
                <div class="flex flex-shrink-0 p-4 border-t border-indigo-600">
                    <a href="{{ route('profile.show') }}" class="flex-shrink-0 block w-full group">
                        <div class="flex items-center">
                            <div> <img class="inline-block rounded-full h-9 w-9" src="{{ auth()->user()->profile_photo_url }}" alt=""> </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-white"> {{ auth()->user()->name }} </p>
                                <p class="text-xs font-medium text-indigo-200 group-hover:text-white"> View profile </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
