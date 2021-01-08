<x-app-layout>
    <x-slot name="header">
        {{ __('Vehicles by '.$party->name) }}
    </x-slot>
    <x-slot name="desc">
        {{ __('View the list of all vehicles by '.$party->name) }}
    </x-slot>

    <livewire:models.parties.vehicles.index :party=$party />
</x-app-layout>