<x-app-layout>
    <x-slot name="header">
        {{ __($office->name.' Office Expenses') }}
    </x-slot>

    <livewire:models.offices.expenses.index :office="$office"/>
</x-app-layout>