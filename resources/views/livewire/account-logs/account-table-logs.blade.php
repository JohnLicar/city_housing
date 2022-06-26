<div class="mt-5">

    <div class="flex justify-end relative mb-5">
        <x-input wire:model.debounce.400ms="search" id="search" class="right-0 w-1/3 sm:w-1/2" type="text"
            name="search" placeholder="Search" :value="old('search')" />
        <div class="absolute top-4 right-3">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
    </div>
    <div class="container overflow-x-auto ">
        <div class="w-full shadow-sm sm:rounded-lg">
            <table class="[&>*]:p-4 w-full text-sm text-left text-gray-500 table-auto dark:text-gray-400">
                <thead class="text-sm text-black uppercase bg-[#ECECED] dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Log Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Event
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created At
                        </th>
                    </tr>

                </thead>

                <tbody>
                    @forelse ($logs as $log)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-gray-900 dark:text-white">
                            <td class="px-6 py-4">
                                {{ $log->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $log->log_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $log->description }}
                            </td>
                            <td class="px-6 py-4">
                                <x-chip :event="$log->event">
                                </x-chip>
                                {{-- <span class="bg-green-500 rounded-full py-2 px-4 text-xs text-white whitespace-nowrap">
                                    {{ $log->event }}
                                </span> --}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $log->created_at->format('Y-m-d h:i A') }}
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

            <div class="mt-4">
                {{ $logs->links() }}
            </div>
        </div>
    </div>

</div>
