<x-app-layout>
    <x-slot name="header">
        {{ __($company->name.' - Settings') }}
    </x-slot>

    <livewire:models.company.settings :company=$company />
</x-app-layout>
