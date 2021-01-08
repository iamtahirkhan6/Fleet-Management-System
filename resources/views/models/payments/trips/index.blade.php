<x-app-layout>
    <x-slot name="header">
        {{ __('Trip Payments') }}
    </x-slot>

    <livewire:models.payments.trips.index />
</x-app-layout>