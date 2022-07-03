<div class="mt-5">

    <div class=" flex justify-between relative mb-3 ">
        <x-button wire:click="$emit('openModal', 'role.create-role')">
            {{ __('New Role') }}
        </x-button>
        <div class="relative w-1/3">
            <x-floating-input wire:model.debounce.400ms="search" id="search" class="w-full" type="text" name="search"
                :value="old('search')" />
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
                Permissions 
            </x-table.heading>
            <x-table.heading>
                No. of Users
            </x-table.heading>
            <x-table.heading sortable wire:click="sortBy('created_at')" :direction="$sortField == 'created_at' ? $sortDirection : null">
                Added On </x-table.heading>
            <x-table.heading sortable wire:click="sortBy('updated_at')" :direction="$sortField == 'updated_at' ? $sortDirection : null">
                Updated On </x-table.heading>
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
                        @if ($role->name !== 'Admin')
                            @foreach ($role->permissions as $permission)
                                <li>
                                    {{ $permission->name }}
                                </li>
                            @endforeach
                        @else
                            <p>All permissions are granted to this role by the system. <br /> <span
                                    class="text-red-500">Please be careful when assigning this role to a user.<span></p>
                        @endif
                    </x-table.cell>
                    <x-table.cell class="cell">
                        {{ $role->users_count }}
                    </x-table.cell>
                    <x-table.cell class="cell">
                        {{ $role->created_at->format('F j, Y h:i:s A') }}
                    </x-table.cell>
                    <x-table.cell class="cell">
                        {{ $role->updated_at->format('F j, Y h:i:s A') }}
                    </x-table.cell>
                    <x-table.cell class="whitespace-nowrap">
                        @if ($role->name !== 'Admin')
                            <x-button.text-button
                                wire:click="$emit('openModal', 'role.edit-role', {{ json_encode(['role' => $role]) }})">
                                Edit
                            </x-button.text-button>

                            @if ($role->id !== 1)
                                <x-button.text-button btnType="error"
                                    wire:click="$emit('openModal', 'role.delete-role', {{ json_encode(['selectedRole' => $role]) }})">
                                    Delete
                                </x-button.text-button>
                            @endif
                        @else
                            <p>No actions allowed</p>
                        @endif
                        {{-- <x-button>Delete</x-button> --}}
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
