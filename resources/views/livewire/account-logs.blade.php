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
                <thead class="text-sm text-black uppercase bg-[#ECECED] dark:bg-gray-700 dark:text-gray-400">

                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            Log Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-24 py-3">
                            Event
                        </th>
                        <th scope="col" class="px-24 py-3">
                            Created At
                        </th>
                    </tr>

                </thead>

                <tbody>
                    @forelse ($logs as $log)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                        <td class="px-6 py-4 text-center">
                            {{ $log->log_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $log->description }}
                        </td>

                        <td class="px-6 py-4 ">
                            {{ $log->event }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $log->created_at }}
                        </td>

                    </tr>
                    @empty
                    <td class="py-6" colspan="4">
                        <div class="flex justify-center flex-col place-items-center align-center">
                            <img class="w-24 h-24" src="{{ asset('images/empty.svg') }}" alt="Empty" />
                            <div class="">
                                <p class="mt-5">
                                    No data for your activity logs
                                </p>
                            </div>
                        </div>
                    </td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>