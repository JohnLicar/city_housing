<div class="max-w-1/2 w-96">
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 ">
        <div class="sm:flex sm:items-start text-center content-center">
            <div class="mx-auto">
                <img src="{{ asset('images/logo.png') }}" class="mx-auto h-48 w-48 rounded-full" />
                <div class="text-lg font-medium text-black mt-4">
                    {{ $user->full_name }}
                    <p class="underline text-base">
                        {{ $user->email }}

                    </p>
                </div>

                <div class="grid grid-cols-2 gap-2 text-left mt-5">
                    <div class="text-lg font-medium text-black">
                        Address:
                        <p class="text-cool-gray-600 text-base">
                            {{ $user->address ?? '' }}
                        </p>
                    </div>
                    <div class="text-lg font-medium text-black ml-5">
                        Date Created:
                        <p class="text-cool-gray-600 text-base">
                            {{ $user->created_at }}
                        </p>
                    </div>
                    <div class="text-lg font-medium text-black ">
                        Contact Number:
                        <p class="text-cool-gray-600 text-base">
                            {{ $user->contact }}

                        </p>
                    </div>
                    <div class="text-lg font-medium text-black ml-5">
                        Approval Status:
                        <p class="text-base {{ $user->approve ? 'text-green-500' : 'text-red-500' }}">
                            {{ $user->approve ? 'Approved' : 'Pending' }}
                        </p>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <div class=" bg-white px-4 py-3 flex flex-row-reverse gap-2">

        <div>
            <button type="button"
                class="w-full inline-flex justify-center text-lg font-medium text-red-1000 hover:text-red-700 hover:underline sm:ml-3 sm:w-auto sm:text-sm">
                {{ $archive ? '' : 'Move to Trash' }}

            </button>

        </div>
        <div>
            <button wire:click="$emit('closeModal')" type=" button"
                class="w-full inline-flex justify-center text-lg font-medium text-black hover:text-gray-700 hover:underline sm:ml-3 sm:w-auto sm:text-sm">
                Close
            </button>
        </div>
    </div>