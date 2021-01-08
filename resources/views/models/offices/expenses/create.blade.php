<x-app-layout>
    <x-slot name="header">
        {{ __('Add Expense Record') }}
    </x-slot>

    <livewire:models.offices.expenses.create :office="$office" />
</x-app-layout>