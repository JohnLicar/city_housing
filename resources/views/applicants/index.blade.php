<x-app-layout>
    <div class="flex flex-row gap-2 pt-12 my-6 sm:flex-col">
        <div class="flex items-center w-2/5 p-4 text-white rounded-lg shadow-xs sm:w-full bg-blue-1000">
            <div class="text-base ">
                <div class="ml-3 font-medium leading-5">
                    Pending Users
                </div>
                <div class="mx-auto text-9xl">
                    {{ 255 }}
                </div>
            </div>
        </div>

        <div class="flex items-center w-2/5 p-4 text-white rounded-lg shadow-xs bg-red-1000 sm:w-full">
            <div class="text-base ">
                <div class="ml-3 font-medium leading-5">
                    Trashed Users
                </div>
                <div class="text-9xl">
                    {{ 255 }}
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
                        {{ 255 }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-12 my-6 bg-white rounded-lg shadow-xs">
        @livewire('applicants.applicants')
    </div>


</x-app-layout>
