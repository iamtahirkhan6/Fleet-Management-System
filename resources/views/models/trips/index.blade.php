<x-app-layout>
    <x-slot name="header">
        {{ __('Trips') }}
    </x-slot>

    <livewire:models.trips.index :project=$project />
</x-app-layout>