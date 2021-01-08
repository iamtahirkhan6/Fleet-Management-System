<x-app-layout>
    <x-slot name="header">
        {{ __('View Mine') }}
    </x-slot>

    <livewire:models.mines.show :mine="$mine" />
</x-app-layout>