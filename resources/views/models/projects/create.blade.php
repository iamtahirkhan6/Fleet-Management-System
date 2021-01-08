<x-app-layout>
    <x-slot name="header">
        {{ __('Create a Project') }}
    </x-slot>
    <x-slot name="desc">
        {{ __('Fill in all the necessary details to create a new project.') }}
    </x-slot>

    <livewire:models.projects.create />
</x-app-layout>