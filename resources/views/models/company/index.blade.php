<x-app-layout>
    @role('admin')
    <x-slot name="header">
        {{ __('Companies') }}
    </x-slot>
    @endrole
    <x-slot name="header">
        {{ __('Your Company') }}
    </x-slot>

    <livewire:models.company.index />
</x-app-layout>
