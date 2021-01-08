<x-app-layout>
    <x-slot name="header">
        {{ __('View Project') }}
    </x-slot>

    <livewire:models.projects.show :project=$project />
</x-app-layout>