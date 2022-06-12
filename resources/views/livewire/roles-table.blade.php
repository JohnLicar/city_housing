<div class="mt-5">

    <div class=" flex justify-between relative mb-3 ">

        <a href="{{ route('users.create') }}">
            <x-button class="bg-blue-1000 px-6">

                {{ __('New User') }}
            </x-button>
        </a>

        <x-input wire:model.debounce.300ms="search" id="search" class="right-0 w-1/3 sm:w-1/2" type="search"
            name="search" placeholder="Search" :value="old('search')" />
    </div>
    <div class="container overflow-x-auto ">
        <div class="w-full shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 table-auto dark:text-gray-400 ">
                @if (!count($roles) == '0')
                <thead class="text-sm text-black uppercase bg-[#ECECED] dark:bg-gray-700 dark:text-gray-400">

                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Permission
                        </th>
                        <th scope="col" class="px-24 py-3">
                            Action
                        </th>
                    </tr>

                </thead>
                @endif
                <tbody>
                    @forelse ($roles as $role)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">

                        <td class="px-6 py-4">
                            {{ $role->name }}

                        </td>
                        <td class="px-6 py-4">
                            @foreach ($role->permissions as $permission)

                            <li>
                                {{ $permission->name }}
                            </li>
                            @endforeach
                        </td>

                        <td class="px-6 py-4 text-center ">
                            <div class="flex justify-between ">
                                <div
                                    class="w-full transform  font-medium text-blue-1000 hover:text-blue-900 hover:scale-110 ">
                                    <button wire:click='$emit("openModal", "user-detail-modal" , {{
                                        json_encode(["user" => $role->id]) }})'>
                                        View Detail
                                    </button>
                                </div>
                                <div class="w-full transform font-medium hover:text-purple-500 hover:scale-110 ">
                                    <a href="{{ route('users.edit', $role) }}">
                                        Edit
                                    </a>
                                </div>

                                <div
                                    class="w-full transform font-medium text-red-600 hover:text-red-900 hover:scale-110">
                                    <button type="submit"
                                        wire:click='$emit("openModal", "confirm-delete-modal" , {{ json_encode([$role->id, "delete"]) }})'>
                                        Move to Trash
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty

                    <div class="flex justify-center">
                        <div class="my-5">
                            <img class="w-24 h-24" src="{{ asset('images/empty.svg' )}}" alt="Empty" />
                            <div class="mr-8">
                                No available Chairman
                            </div>
                        </div>
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>