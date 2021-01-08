<x-app-layout>
    <x-slot name="header">
        {{ __('View Trip') }}
    </x-slot>

    <livewire:models.trips.show :trip=$trip />
</x-app-layout>