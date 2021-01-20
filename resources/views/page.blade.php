<x-app-layout>
    <x-slot name="header">
        {{ __($title) }}
    </x-slot>

    <x-slot name="desc">
        {{ __(isset($description) ? $description : null) }}
    </x-slot>

    @if (isset($key) && isset($val))
        @livewire($livewire, [$key => $val])
    @else
        @livewire($livewire)
    @endif
</x-app-layout>
