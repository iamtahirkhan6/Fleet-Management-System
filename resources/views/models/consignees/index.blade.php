<x-app-layout>
    <x-slot name="header">
        {{ __('Consignees') }}
    </x-slot>
    <x-slot name="desc">
        {{ __('View all the consignees you have done business with') }}
    </x-slot>

    @livewire('models.consignees.index')
</x-app-layout>