<div>
    <div class="my-6 text-2xl font-semibold text-gray-700 mt-14">
        <p class="text-2xl leading-8">
            User Accounts
        </p>
        <p class="text-base font-normal">Here are the user accounts of this system.</p>
        </p>
    </div>
    <div class=" flex justify-between space-x-4 mb-3 ">

        <a href="{{ route('users.create') }}">
            <x-button class="bg-blue-1000 px-6">

                {{ __('New User') }}
            </x-button>
        </a>

        <x-input wire:model.debounce.300ms="search" id="search" class="right-0 w-1/3" type="search" name="search"
            placeholder="Search" :value="old('search')" />
    </div>

    <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
        <div class="overflow-x-auto w-full">
            <table class="w-full whitespace-no-wrap">
                @if (!count($users) == '0')
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-black uppercase bg-[#ECECED] border-b">
                        <th class="px-4 py-3">User</th>
                        <th class="px-4 py-3">Email Address</th>
                        <th class="px-4 py-3">Contact</th>
                        <th class="px-4 py-3">Created on</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                @endif

                <tbody class="bg-white divide-y table-auto">

                    @forelse ($users as $user)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 text-sm ">
                            <div class="flex items-center">
                                <div class="mt-6 my-auto h-16 w-16">
                                    <img src="{{ asset('images/logo.jpg') }}" class="mx-2 h-10 w-10 rounded-full" />
                                </div>
                                <span>{{$user->full_name}}</span>
                            </div>
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $user->email }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $user->contact }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $user->created_at }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            <div class="flex item-center justify-between">
                                <div class="w-4 transform hover:text-purple-500 hover:scale-110 mr-5">
                                    <a href="{{ route('users.show', $user) }}">
                                        View Detail
                                    </a>
                                </div>
                                <div class="w-4 transform hover:text-purple-500 hover:scale-110 mr-5">
                                    <a href="{{ route('users.edit', $user) }}">
                                        Edit
                                    </a>
                                </div>

                                <div class="w-4 transform text-red-600 hover:text-red-900 hover:scale-110">
                                    <a href="#" class="w-4 transform text-red-600 hover:text-red-900 hover:scale-110">
                                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                class="w-4 h-4">
                                                Move to Trash
                                            </button>
                                        </form>

                                    </a>
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
        {{-- <div
            class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
            {{ $users->links() }}
        </div> --}}
    </div>
</div>