<div class="mt-5 mb-5">


    <div class="relative flex justify-end mb-5">

        <x-button-dropdown.button-dropdown class="mr-2">
            Filter Data
            <x-slot name="content">
                <div class="px-4 py-3 text-sm bg-gray-100 text-gray-900 dark:text-white">
                    <p class="text-base">Date Range</p>
                    <div class="font-medium truncate">Date from and to filter</div>
                </div>
                <x-button-dropdown.content>
                    <div class="flex items-center justify-center">
                        <div class="flex flex-col">
                            <span>From</span>
                            <input wire:model="start" id="datepicker" type="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date">
                        </div>
                        <div class="mx-2 mt-3.5">
                            <span>to</span>
                        </div>
                        <div class="flex flex-col">
                            <span>To</span>
                            <input wire:model="end" id="datepicker" type="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date">
                        </div>
                    </div>

                    <div class="flex justify-end mt-5">
                        <x-button wire:click="resetFilter">Reset Filter</x-button>
                    </div>

                </x-button-dropdown.content>
            </x-slot>
        </x-button-dropdown.button-dropdown>

        <div class="relative w-1/3">
            <x-floating-input wire:model.debounce.400ms="search" id="search" class="w-full" type="text"
                name="search" :value="old('search')" />
            <x-floating-label for="search" :value="__('Search')" />
            <div class="absolute top-3 right-3">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="container overflow-x-auto">
        <x-table>
            <x-slot name="head">
                <x-table.heading sortable multi-column wire:click="sortBy('id')" :direction="$sortField == 'id' ? $sortDirection : null">
                    ID
                </x-table.heading>
                <x-table.heading sortable multi-column wire:click="sortBy('log_name')" :direction="$sortField == 'log_name' ? $sortDirection : null"> Log Name
                </x-table.heading>
                <x-table.heading sortable multi-column wire:click="sortBy('description')" :direction="$sortField == 'description' ? $sortDirection : null">
                    Description </x-table.heading>
                <x-table.heading sortable multi-column wire:click="sortBy('event')" :direction="$sortField == 'event' ? $sortDirection : null"> Event
                </x-table.heading>
                <x-table.heading sortable multi-column wire:click="sortBy('created_at')" :direction="$sortField == 'created_at' ? $sortDirection : null">
                    Created At </x-table.heading>
            </x-slot>
            <x-slot name="body">
                @forelse ($logs as $log)
                    <x-table.row wire:loading.class="opacity-50" striped>
                        <x-table.cell class="cell">
                            {{ $log->id }}
                        </x-table.cell>
                        <x-table.cell class="cell">
                            {{ $log->log_name }}
                        </x-table.cell>
                        <x-table.cell class="cell">
                            {{ $log->description }}
                        </x-table.cell>
                        <x-table.cell class="cell">
                            <x-chip :event="$log->event" />
                        </x-table.cell>
                        <x-table.cell class="cell">
                            {{ $log->created_at->format('F j, Y h:i:s A') }}
                        </x-table.cell>
                    </x-table.row>
                @empty
                    <td class="py-6" colspan="5">
                        <div class="flex flex-col justify-center place-items-center align-center">
                            <img class="w-24 h-24" src="{{ asset('images/empty.svg') }}" alt="Empty" />
                            <div class="">
                                <p class="mt-5 text-gray-500">
                                    No data available ...
                                </p>
                            </div>
                        </div>
                    </td>
                @endforelse
            </x-slot>
        </x-table>
        <div class="mt-5 mb-5">
            {{ $logs->onEachSide(0)->links() }}
        </div>
    </div>

</div>
