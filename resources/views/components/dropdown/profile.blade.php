<div class="invisible md:visible relative inline-grid float-right ml-3">
    <div>
        <button @click="profileDropdown = true" class="flex items-center float-right max-w-xs text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50" id="user-menu" aria-haspopup="true">
            <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="">
            <span class="hidden ml-3 text-sm font-medium text-gray-700 lg:block"><span class="sr-only">Open user menu for </span>{{ Auth::user()->name }}</span>
            <x-svg.chevron-down class="flex-shrink-0 hidden w-5 h-5 ml-1 text-gray-400 lg:block" />
        </button>
    </div>
    <div x-cloak x-show="profileDropdown" @click.away="profileDropdown = false"
         class="absolute right-0 w-48 py-1 mt-12 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5"
         role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

        <x-jet-dropdown-link href="{{ route('profile.show') }}">
            {{ __('Your Profile') }}
        </x-jet-dropdown-link>

        @role('manager')
        <div class="border-t border-gray-100"></div>

        <x-jet-dropdown-link href="{{ route('company.settings') }}">
            {{ __('Company Settings') }}
        </x-jet-dropdown-link>
        @endrole

        <div class="border-t border-gray-100"></div>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}"
                                 onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Logout') }}
            </x-jet-dropdown-link>
        </form>

    </div>
</div>
