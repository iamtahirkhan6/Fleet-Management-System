<x-app-layout>
    <x-slot name="header">
        {{ $title ?? '' }}
    </x-slot>

    <x-slot name="desc">
        {{ $description ?? '' }}
    </x-slot>

    @if (isset($key) && isset($val))
        @livewire($livewire, [$key => $val])
    @else
        @livewire($livewire)
    @endif
</x-app-layout>
