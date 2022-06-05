<x-app-layout>
    <div class="flex justify-between my-6">
        <div class="p-4 w-80 bg-blue-1000  rounded-lg shadow-xs text-white">
            <div class="flex items-center px-3">

                <div class=" text-base">
                    <div class="ml-3 font-medium leading-5">
                        Pending Users
                    </div>
                    <div class="text-9xl">
                        04
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 w-80 bg-red-1000  rounded-lg shadow-xs text-white">
            <div class="flex items-center px-3">

                <div class=" text-base">
                    <div class="ml-3 font-medium leading-5">
                        Trashed Users
                    </div>
                    <div class="text-9xl">
                        14
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 w-80 bg-green-1000  rounded-lg shadow-xs text-white">
            <div class="flex items-center px-3">

                <div class=" text-base">
                    <div class="ml-3 font-medium leading-5">
                        Total Users
                    </div>
                    <div class="text-9xl">
                        20
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-14">
        <div class="mt-4 bg-white rounded-lg shadow-xs">
            @livewire('user-table')
        </div>

        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Archived User
        </h2>
        <div class="mt-4     bg-white rounded-lg shadow-xs">
            @livewire('archive-user-table')
        </div>
    </div>


</x-app-layout>