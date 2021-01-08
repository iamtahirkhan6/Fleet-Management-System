<x-app-layout>
    <x-slot name="header">
        {{ __('Fleet Vehicles') }}
    </x-slot>

    <livewire:models.fleets.vehicles.index :fleet="$fleet" />
</x-app-layout>

