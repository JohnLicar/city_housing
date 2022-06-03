<x-app-layout>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>
    <div class="p-4 bg-white rounded-lg shadow-xs">
        @livewire('user-table')
    </div>

    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Archived User
    </h2>
    <div class="p-4 bg-white rounded-lg shadow-xs">
        @livewire('archive-user-table')
    </div>


</x-app-layout>