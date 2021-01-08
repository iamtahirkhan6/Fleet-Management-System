<x-app-layout>
    <x-slot name="header">
        {{ __('Create A New Trip') }}
    </x-slot>

    <livewire:models.trips.create :project=$project />
</x-app-layout>