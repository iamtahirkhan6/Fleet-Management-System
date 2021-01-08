<x-app-layout>
    <x-slot name="header">
        {{ __('View Vehicle') }}
    </x-slot>

    <livewire:models.vehicles.show :vehicle=$vehicle />
</x-app-layout>