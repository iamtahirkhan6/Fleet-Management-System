<x-app-layout>
    <x-slot name="header">
        {{ __('Employees') }}
    </x-slot>
    <x-slot name="desc">
        {{ __('View all the employees and perform operations on this page') }}
    </x-slot>

    @livewire('models.employees.index', ['officeParameter' => $office])
</x-app-layout>