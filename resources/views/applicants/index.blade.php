<x-app-layout>
  <x-slot name="header">
    {{ __('Applicants') }}
  </x-slot>
  <div class="p-4 bg-white rounded-lg shadow-xs">
    @livewire('applicants')
  </div>


</x-app-layout>