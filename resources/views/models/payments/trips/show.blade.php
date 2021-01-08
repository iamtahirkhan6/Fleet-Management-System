<x-app-layout>
    <x-slot name="header">
        {{ __('View Transaction') }}
    </x-slot>
    
    <livewire:models.payments.trips.show :transaction=$transaction />
</x-app-layout>