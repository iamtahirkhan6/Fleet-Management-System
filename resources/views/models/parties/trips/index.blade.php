<x-app-layout>
    <x-slot name="header">
        {{ __('Trips by '.$party->name) }}
    </x-slot>
    <x-slot name="desc">
        {{ __('View the list of all trips performed') }}
    </x-slot>

    <livewire:models.parties.trips.index :party=$party />
</x-app-layout>