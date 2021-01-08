<x-app-layout>
    <x-slot name="header">
        {{ __('View Party') }}
    </x-slot>

    <livewire:models.parties.show :party=$party />
</x-app-layout>