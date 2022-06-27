<x-app-layout>
    <div class="relative flex flex-row gap-2 pt-12 my-6 sm:flex-col">
        <div class="flex items-center w-2/5 p-4 text-white rounded-lg shadow-xs sm:w-full bg-blue-1000">
            <div class="text-base ">
                <div class="ml-3 font-medium leading-5">
                    Pending Users
                </div>
                <div class="mx-auto text-9xl">

                </div>
            </div>
        </div>

        <div class="flex items-center w-2/5 p-4 text-white rounded-lg shadow-xs bg-red-1000 sm:w-full">
            <div class="text-base ">
                <div class="ml-3 font-medium leading-5">
                    Trashed Users
                </div>
                <div class="text-9xl">

                </div>
            </div>
        </div>

        <div class="flex items-center w-2/5 p-4 text-white rounded-lg shadow-xs bg-green-1000 sm:w-full">
            <div class="flex items-center px-3">

                <div class="text-base ">
                    <div class="ml-3 font-medium leading-5">
                        Total Users
                    </div>
                    <div class="text-9xl">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mt-14">
        <div class="mt-4 bg-white rounded-lg shadow-xs">
            <div class="my-6 text-2xl font-semibold text-gray-700 mt-14">
                <p class="text-2xl leading-8">
                    Housing Project
                </p>
                <p class="text-base font-normal">Here are the Housing unit in Tacloban.</p>
                </p>
            </div>
            @livewire('housing-unit.housing-unit-table')
        </div>
        {{--
        <div class="mt-4 bg-white rounded-lg shadow-xs">
            <div class="my-6 text-2xl font-semibold text-gray-700 mt-14">
                <p class="text-2xl leading-8">
                    Archive Accounts
                </p>
                <p class="text-base font-normal">Here are the archived user accounts of this system.</p>
                </p>
            </div>

        </div> --}}
    </div>


</x-app-layout>
