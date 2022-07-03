<div class="mt-5">

    <div class="flex justify-between">
        <button
            class="px-4 py-2 text-sm font-medium  leading-5 text-center text-white transition-colors duration-150 border border-transparent rounded-lg bg-blue-1000 active:bg-blue-900 hover:bg-blue-700 focus:outline-none focus:ring"
            wire:click='$emit("openModal", "user-modal.create-user")'>
            {{ __('New User') }}
        </button>
        <div class="relative flex justify-content-end w-2/5">
            <x-button-dropdown.button-dropdown class="mr-2 whitespace-nowrap">
                Filter Data
                <x-slot name="content">
                    <div class="px-4 py-3 text-sm bg-gray-100 text-gray-900 dark:text-white">
                        <p class="text-base">Filter User</p>
                        <div class="font-medium truncate">Set filter for user data</div>
                    </div>
                    <x-button-dropdown.content>
                        <div class="flex items-center justify-center">
                            <div class="flex flex-col">
                                <span>From</span>
                                <input wire:model.defer="start" id="datepicker" type="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date">
                            </div>
                            <div class="mx-2 mt-3.5">
                                <span>to</span>
                            </div>
                            <div class="flex flex-col">
                                <span>To</span>
                                <input wire:model.defer="end" id="datepicker" type="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date">
                            </div>
                        </div>
                        <div class="relative w-full">
                            <p class="mt-2">Account Status</p>
                            <select wire:model.defer="approval_status" id="approval_status" name="approval_status"
                                class="block px-2.5 py-3 w-full text-sm
                            text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                            dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option disabled>Select Status</option>
                                <option value="Approved" @if ($approval_status === 1) selected @endif>Approved
                                </option>
                                <option value="Pending" @if ($approval_status === 0) selected @endif>Pending
                                </option>
                            </select>
                        </div>
                        <div class="flex justify-end mt-5">
                            <x-button.text-button btnType="primary" wire:click="resetFilter">
                                Reset
                            </x-button.text-button>
                            <x-button.text-button btnType="success" wire:click="setFilter">
                                Set Filter
                            </x-button.text-button>
                        </div>
                    </x-button-dropdown.content>
                </x-slot>
            </x-button-dropdown.button-dropdown>

            <div class="relative w-full">
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
    </div>
    <div class="container overflow-x-auto mt-4">
        <div class="w-full shadow-md sm:rounded-lg">
            <x-table>
                <x-slot name="head">
                    <x-table.heading sortable wire:click="sortBy('id')" :direction="$sortField == 'id' ? $sortDirection : null">
                        ID
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('last_name')" :direction="$sortField == 'last_name' ? $sortDirection : null">
                        User
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('email')" :direction="$sortField == 'email' ? $sortDirection : null">
                        Email Address
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('contact')" :direction="$sortField == 'contact' ? $sortDirection : null">
                        Contact
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('created_at')" :direction="$sortField == 'created_at' ? $sortDirection : null">
                        Created On
                    </x-table.heading>
                    <x-table.heading>
                        Action
                    </x-table.heading>
                </x-slot>
                <x-slot name="body">
    
                    @forelse ($users as $user)
                        <x-table.row wire:key="{{ $user->id }}" wire:loading.class="opacity-50">
                            <x-table.cell class="cell">
                                {{ $user->id }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                <div class="flex items-center">
                                    @if ($user->avatar)
                                        <div class="w-16 h-16 my-auto mt-6">
                                            <img src="{{ asset('images/' . $user->avatar) }}"
                                                class="w-10 h-10 mx-2 rounded-full" />
                                        </div>
                                    @else
                                        <div class="w-16 h-16 my-auto mt-6">
                                            <img src="{{ asset('images/logo.jpg') }}"
                                                class="w-10 h-10 mx-2 rounded-full" />
                                        </div>
                                    @endif
                                    <span class="whitespace-nowrap">{{ $user->full_name }}</span>
                                </div>
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $user->email }}
                            </x-table.cell>
                            <x-table.cell class="whitespace-nowrap">
                                {{ $user->contact }}
                            </x-table.cell>
                            <x-table.cell class="whitespace-nowrap">
                                {{ $user->created_at->format('F j, Y h:i:s A') }}
                            </x-table.cell>
                            <x-table.cell class="whitespace-nowrap">

                                <x-button.text-button
                                    wire:click="$emit('openModal', 'user-detail-modal', {{ json_encode(['user' => $user->id]) }})">
                                    View
                                </x-button.text-button>

                                <x-button.text-button btnType="success"
                                    wire:click="$emit('openModal', 'user-modal.edit-user', {{ json_encode(['user' => $user->id]) }})">
                                    Edit
                                </x-button.text-button>
                                <x-button.text-button btnType="error"
                                    wire:click="$emit('openModal', 'confirm-delete-modal', {{ json_encode([$user->id, 'delete']) }})">
                                    Archive
                                </x-button.text-button>
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
        </div>
        <div class="mt-5">
            {{ $users->onEachSide(0)->links() }}
        </div>
    </div>

</div>
