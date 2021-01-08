<x-app-layout>
    <x-slot name="header">
        {{ __('Fleet Vehicles Live Tracking') }}
    </x-slot>

    <livewire:models.fleets.live.index :fleet="$fleet" />
</x-app-layout>

