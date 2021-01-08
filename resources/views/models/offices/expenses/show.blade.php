<x-app-layout>
    <x-slot name="header">
        {{ __('View Expense') }}
    </x-slot>

    <livewire:models.offices.expenses.show :expense="$expense" />
</x-app-layout>