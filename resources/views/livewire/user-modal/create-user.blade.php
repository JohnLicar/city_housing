<div>
    <div class="w-9/12 ">
        <div class="bg-white w-96  overflow-auto shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <form method="POST" action="{{  route('users.store') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-5">
                        <p class="font-medium text-xl text-left">Create new User</p>
                        <p class="text-gray-500 text-sm text-left">All fields are required</p>
                    </div>

                    <div>
                        <div class="mt-4">
                            <div date-rangepicker class="flex items-center">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input name="start" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date start">
                                </div>
                                <span class="mx-4 text-gray-500">to</span>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input name="end" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date end">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="first_name" name="first_name" wire:model="first_name"
                                    class="block w-full border-2 " required />
                                <x-floating-label for="first_name" :value="__('First Name')" />
                            </div>
                            @error('first_name')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="middle_name" name="middle_name"
                                    wire:model="middle_name" />
                                <x-floating-label for="middle_name" :value="__('Middle Name')" />
                            </div>
                            @error('middle_name')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="last_name" name="last_name" wire:model="last_name"
                                    required />
                                <x-floating-label for="last_name" :value="__('Last Name')" />
                            </div>
                            @error('last_name')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="email" id="email" name="email" wire:model="email" required />
                                <x-floating-label for="email" :value="__('Email')" />
                            </div>
                            @error('email')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <select wire:model="gender" id="gender" name="gender"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm
                        text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female
                                </option>
                                <option value="Other">Other</option>
                            </select>
                            @error('gender')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="address" name="address" wire:model="address"
                                    class="block w-full" />
                                <x-floating-label for="address" :value="__('Address')" />
                            </div>
                            @error('address')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="contact" name="contact" wire:model="contact"
                                    class="block w-full" required />
                                <x-floating-label for="contact" :value="__('Contact Number')" />
                            </div>
                            @error('contact')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <select wire:model="role" id="role" name="role" class="block px-2.5 pb-2.5 pt-4 w-full text-sm
                        text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                        dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option>Select Role</option>
                                @foreach ($roles as $role)
                                <option value="{{ $role->name }}" @if ($role===$role->name )
                                    selected @endif> {{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="mt-4">
                        <div class="flex items-center justify-end mt-4">
                            <x-back-button wire:click="$emit('closeModal')" class="ml-3">
                                {{ __('Back') }}
                            </x-back-button>
                            <x-button class="ml-3">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
