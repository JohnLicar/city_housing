<div class="mt-5">

    <div class="flex justify-between mb-3 ">

        <button
            class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 border border-transparent rounded-lg bg-blue-1000 active:bg-blue-900 hover:bg-blue-700 focus:outline-none focus:ring"
            wire:click='$emit("openModal", "user-modal.create-user")'>
            {{ __('New User') }}
        </button>

        <x-input wire:model.debounce.300ms="search" id="search" class="right-0 w-1/3 sm:w-1/2" type="search"
            name="search" placeholder="Search" :value="old('search')" />
    </div>
    <div class="container overflow-x-auto ">
        <div class="w-full shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 table-auto dark:text-gray-400 ">
                @if (!count($users) == '0')
                <thead class="text-sm text-black uppercase bg-[#ECECED] dark:bg-gray-700 dark:text-gray-400">

                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            User
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Contact
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Created on
                        </th>
                        <th scope="col" class="px-24 py-3">
                            Action
                        </th>
                    </tr>

                </thead>
                @endif
                <tbody>
                    @forelse ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            <div class="flex items-center">
                                @if ($user->avatar)
                                <div class="w-16 h-16 my-auto mt-6">
                                    <img src="{{ asset('images/'.$user->avatar) }}"
                                        class="w-10 h-10 mx-2 rounded-full" />
                                </div>
                                @else
                                <div class="w-16 h-16 my-auto mt-6">
                                    <img src="{{ asset('images/logo.jpg') }}" class="w-10 h-10 mx-2 rounded-full" />
                                </div>
                                @endif
                                <span>{{$user->full_name}}</span>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->email }}

                        </td>
                        <td class="px-6 py-4">
                            {{ $user->contact }}

                        </td>
                        <td class="px-6 py-4">
                            {{ $user->created_at->format('F j, Y h:i:s A') }}

                        </td>

                        <td class="px-6 py-4 text-center ">
                            <div class="flex justify-between ">
                                <div
                                    class="w-full font-medium transform text-blue-1000 hover:text-blue-900 hover:scale-110 ">
                                    <button wire:click='$emit("openModal", "user-detail-modal" , {{
                                        json_encode(["user" => $user->id]) }})'>
                                        View Detail
                                    </button>
                                </div>
                                <div class="w-full font-medium transform hover:text-purple-500 hover:scale-110 ">

                                    <button wire:click='$emit("openModal", "user-modal.edit-user" , {{
                                        json_encode(["user" => $user->id]) }})'>
                                        Edit
                                    </button>
                                </div>

                                <div
                                    class="w-full font-medium text-red-600 transform hover:text-red-900 hover:scale-110">
                                    <button type="submit"
                                        wire:click='$emit("openModal", "confirm-delete-modal" , {{ json_encode([$user->id, "delete"]) }})'>
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
        <div class="mt-5">
            {{ $users->onEachSide(0)->links() }}
        </div>
    </div>

</div>
