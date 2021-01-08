<x-app-layout>
    <x-slot name="header">
        {{ __('Vehicle RC') }}
    </x-slot>
    <x-slot name="desc">
        {{ __('Search for any vehicle information here.') }}
    </x-slot>

    <livewire:models.rc-search.index />
</x-app-layout>