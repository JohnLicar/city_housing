<div class="max-w-md">
    <div class="pr-3 pl-6 pt-5 pb-4 sm:p-6 sm:pb-3">
        <div class="sm:flex sm:items-start text-center content-center">
            <div class="mx-auto">
                <img src="{{ asset('images/logo.png') }}" class="mx-auto h-48 w-48 rounded-full" />
                <div class="text-lg font-medium text-black mt-2">
                    {{ $user->full_name }}
                    <p class="text-sm text-gray-600">
                        {{ $user->email }}
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-2 text-left mt-5">
                    <div class="font-medium text-black">
                        Address:
                        <p class="text-cool-gray-600">
                            {{ $user->address ?? '' }}
                        </p>
                    </div>
                    <div class="font-medium text-black">
                        Date Created:
                        <p class="text-cool-gray-600">
                            {{ $user->created_at->format('F j, Y h:i:s A') }}
                        </p>
                    </div>
                    <div class="font-medium text-black ">
                        Contact Number:
                        <p class="text-cool-gray-600">
                            {{ $user->contact }}

                        </p>
                    </div>
                    <div class="font-medium text-black">
                        Account Status:
                        <p class="text-sm {{ $user->approve ? 'text-green-500' : 'text-red-500' }}">
                            {{ $user->approve ? 'Approved' : 'Pending' }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="justify-end flex gap-2 mt-5">
            <x-button.text-button btnType="secondary" wire:click="$emit('closeModal')">
                Close
            </x-button.text-button>
            <x-button.text-button btnType="error">
                {{ $archive ? '' : 'Archive' }}
            </x-button.text-button>
            @unless($user->approve)
                <x-button.text-button btnType="success" wire:click="approveUser">
                    Approve
                </x-button.text-button>
            @endunless
        </div>
    </div>
</div>
