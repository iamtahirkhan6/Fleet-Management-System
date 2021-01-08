<x-app-layout>
    <x-slot name="header">
        {{ __('View Sector') }}
    </x-slot>

    <livewire:models.mines.show :sector="$sector" />
</x-app-layout>