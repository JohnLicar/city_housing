<x-app-layout>
    <div class="flex flex-row sm:flex-col gap-2 my-6 pt-12 relative">
        <div class="flex border items-center p-4 basis-1/3 bg-green-500 text-white sm:w-full rounded-lg shadow-md">
            <div class="flex items-center px-3">
                <div class=" text-base">
                    <div class="ml-3 font-medium leading-5">
                        Total Users
                    </div>
                    <div class="text-9xl">
                        {{ $totalUsers }}
                    </div>
                </div>
            </div>
            <p class="ml-2 flex items-baseline text-sm font-semibold  text-white">
                <svg class="self-center flex-shrink-0 h-5 w-5  text-white" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                </svg>
                <span class="sr-only"> Increased by </span>
                {{ $stats }}
            </p>
        </div>
        <div class="flex items-center p-4 basis-1/3 sm:w-full bg-orange-500 rounded-lg shadow-xs text-white">
            <div class="text-base">
                <div class="ml-3 font-medium leading-5">
                    Pending Users
                </div>
                <div class="text-9xl mx-auto">
                    {{ $pendingUsers }}
                </div>
            </div>
        </div>
{{-- 
        <div class="flex items-center p-4 bg-red-1000 sm:w-full w-2/5 rounded-lg shadow-xs text-white">
            <div class=" text-base">
                <div class="ml-3 font-medium leading-5">
                    Trashed Users
                </div>
                <div class="text-9xl">
                    {{ $trashedUsers }}
                </div>
            </div>
        </div> --}}
    </div>


    <div class="mt-14">
        <div class="mt-4 bg-white rounded-lg shadow-xs">
            <div class="my-6 text-2xl font-semibold text-gray-700 mt-14">
                <p class="text-2xl leading-8">
                    User Accounts
                </p>
                <p class="text-base font-normal">Here are the user accounts of this system.</p>
                </p>
            </div>
            @livewire('user-table')
        </div>

        <div class="mt-4 bg-white rounded-lg shadow-xs">
            <div class="my-6 text-2xl font-semibold text-gray-700 mt-14">
                <p class="text-2xl leading-8">
                    Archive Accounts
                </p>
                <p class="text-base font-normal">Here are the archived user accounts of this system.</p>
                </p>
            </div>
            @livewire('archive-user-table')
        </div>
    </div>


</x-app-layout>
