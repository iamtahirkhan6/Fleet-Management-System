<x-app-layout>
    <x-slot name="header">
        {{ __('View Trip') }}
    </x-slot>

    <livewire:models.parties.trips.show :party=$party :trip=$trip />
</x-app-layout>