<x-app-layout>
    <x-slot name="header">
        {{ __('View Vehicle') }}
    </x-slot>

    <livewire:models.market-vehicles.show :market_vehicle=$market_vehicle />
</x-app-layout>
