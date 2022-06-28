<div>
    <div class=" flex justify-between space-x-4 mb-3 ">

        <a href="{{ route('applicants.create') }}">
            <x-button class="flex">
               
                {{ __('Add Applicants') }}
            </x-button>
        </a>

        <x-input wire:model.debounce.300ms="search" id="search" class="right-0 w-1/3" type="search" name="search"
            placeholder="Search User" :value="old('search')" />
    </div>

    <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
        <div class="overflow-x-auto w-full">
            {{-- <table class="w-full whitespace-no-wrap">
                @if (!count($users) == '0')
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                        <th class="px-4 py-3">First Name</th>
                        <th class="px-4 py-3">Middle Name</th>
                        <th class="px-4 py-3">Last Name</th>
                        <th class="px-4 py-3">Gender</th>
                        <th class="px-4 py-3">Contact</th>
                        <th class="px-4 py-3">Address</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                @endif

                <tbody class="bg-white divide-y">

                    @forelse ($users as $user)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 text-sm">
                            {{ $user->first_name }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $user->middle_name ?? '' }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $user->last_name }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $user->gender }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $user->contact }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $user->address }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $user->email }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            @if ($user->approve)
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                Approved
                            </span>
                            @else
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500 text-white">
                                Pending
                            </span>
                            @endif
                        </td>

                        <td class="px-4 py-3 text-sm">
                            <div class="flex item-center justify-between">
                                <div class="w-4 transform hover:text-purple-500 hover:scale-110 mr-5">
                                    <a href="{{ route('users.edit', $user) }}">
                                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                </div>

                                <div class="w-4 transform text-red-600 hover:text-red-900 hover:scale-110">
                                    <a href="#" class="w-4 transform text-red-600 hover:text-red-900 hover:scale-110">
                                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                class="w-4 h-4">
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17 5V4C17 2.89543 16.1046 2 15 2H9C7.89543 2 7 2.89543 7 4V5H4C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H5V18C5 19.6569 6.34315 21 8 21H16C17.6569 21 19 19.6569 19 18V7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H17ZM15 4H9V5H15V4ZM17 7H7V18C7 18.5523 7.44772 19 8 19H16C16.5523 19 17 18.5523 17 18V7Z"
                                                        fill="currentColor" />
                                                    <path d="M9 9H11V17H9V9Z" fill="currentColor" />
                                                    <path d="M13 9H15V17H13V9Z" fill="currentColor" />
                                                </svg>
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
            </table> --}}
        </div>
        <div
            class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
            {{-- {{ $users->links() }} --}}
        </div>
    </div>
</div>