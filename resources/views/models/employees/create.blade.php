<x-app-layout>
    <x-slot name="header">
        {{ __('Add Employees') }}
    </x-slot>
    <x-slot name="desc">
        {{ __('Add a new employee and perform operations on this page') }}
    </x-slot>

    <livewire:models.employees.create />
</x-app-layout>
