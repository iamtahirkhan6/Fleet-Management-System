<x-app-layout>
    <x-slot name="header">
        {{ __($company->name) }}
    </x-slot>

    <livewire:models.companies.show :company=$company />
</x-app-layout>