<div class="mt-5">

    <div class=" flex justify-between relative mb-3 ">

        <a href="{{ route('roles.create') }}">
            <x-button class="bg-blue-1000 px-6">

                {{ __('New Role') }}
            </x-button>
        </a>

        <div class="relative w-1/3">
            <x-floating-input wire:model.debounce.400ms="search" id="search" class="w-full sm:w-1/2" type="text"
                name="search" :value="old('search')" />
            <x-floating-label for="search" :value="__('Search')" />
        </div>
        <div class="absolute top-3 right-3">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
    </div>


    <x-table>
        <x-slot name="head">
            <x-table.heading sortable wire:click="sortBy('id')" :direction="$sortField == 'id' ? $sortDirection : null">
                ID
            </x-table.heading>
            <x-table.heading sortable wire:click="sortBy('name')" :direction="$sortField == 'name' ? $sortDirection : null">
                Role
            </x-table.heading>
            <x-table.heading>
                Permissions </x-table.heading>
            <x-table.heading sortable wire:click="sortBy('created_at')" :direction="$sortField == 'created_at' ? $sortDirection : null">
                Added On </x-table.heading>
            <x-table.heading>
                Actions </x-table.heading>
        </x-slot>
        <x-slot name="body">
            @forelse ($roles as $role)
                <x-table.row wire:loading.class="opacity-50" striped>
                    <x-table.cell class="cell">
                        {{ $role->id }}
                    </x-table.cell>
                    <x-table.cell class="cell">
                        {{ $role->name }}
                    </x-table.cell>
                    <x-table.cell class="cell">
                        @foreach ($role->permissions as $permission)
                            <li>
                                {{ $permission->name }}
                            </li>
                        @endforeach
                    </x-table.cell>
                    <x-table.cell class="cell">
                        {{ $role->created_at->format('F j, Y h:i:s A') }}
                    </x-table.cell>
                    <x-table.cell>
                        <x-button>Update</x-button>
                        <x-button>Delete</x-button>
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
        {{ $roles->links() }}
    </div>

</div>
