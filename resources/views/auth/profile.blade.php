<x-app-layout>
    <div class="py-5">
        <div class="my-6 pb-5 text-2xl font-semibold text-gray-700 border-b-2 mt-16">
            <p class="text-2xl leading-8">
                {{ __('Personal Information' ) }}
            </p>
            <p class="text-base font-normal">Please make sure that your entered informations are correct.</p>

        </div>
        {{ auth()->user()->password }}
        <div>
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="pr-72">
                    <p class="font-medium text-lg">Basic Info</p>
                    <div class="grid grid-cols-2 gap-2">

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="first_name" name="first_name"
                                    :value="{{ old('first_name') }}" value="{{ auth()->user()->first_name }}"
                                    class="block w-full " />
                                <x-floating-label for="first_name" :value="__('First Name')" />
                            </div>
                            @error('first_name')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="middle_name" name="middle_name"
                                    :value="{{ old('middle_name') }}" value="{{ auth()->user()->middle_name }}"
                                    class="block w-full" />
                                <x-floating-label for="middle_name" :value="__('Middle Name')" />
                            </div>
                            @error('middle_name')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="last_name" name="last_name"
                                    :value="{{ old('last_name') }}" value="{{ auth()->user()->last_name }}"
                                    class="block w-full" />
                                <x-floating-label for="last_name" :value="__('Last Name')" />
                            </div>
                            @error('last_name')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <select id="gender" name="gender" class="block px-2.5 pb-2.5 pt-4 w-full text-sm
                    text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                    dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option>Select Gender</option>
                                <option @if (auth()->user()->gender === "Male")
                                    selected @endif value="Male" {{ old('gender')=="Male" ? 'selected' : '' }}>Male
                                </option>
                                <option @if (auth()->user()->gender === "Female")
                                    selected @endif value="Female" {{ old('gender')=="Female" ? 'selected' : ''
                                    }}>Female</option>
                                <option @if (auth()->user()->gender === "Other")
                                    selected @endif value="Other" {{ old('gender')=="Other" ? 'selected' : '' }}>Other
                                </option>
                            </select>
                            @error('gender')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="address" name="address" :value="{{ old('address') }}"
                                    value="{{ auth()->user()->address }}" class="block w-full" />
                                <x-floating-label for="address" :value="__('Address')" />
                            </div>
                            @error('address')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message
                                }}</p>
                            @enderror
                        </div>


                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="contact" name="contact" value="{{ old('contact') }}"
                                    value="{{ auth()->user()->contact }}" class="block w-full" />
                                <x-floating-label for="contact" :value="__('Contact Number')" />
                            </div>
                            @error('contact')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message
                                }}</p>
                            @enderror
                        </div>


                    </div>
                </div>
                <div class="border-b-2 mt-6"></div>
                <div class="pr-72 mt-5">
                    @livewire('image-upload')
                </div>

                <div class="border-b-2 mt-6"></div>
                <div class="pr-72">
                    <div class="text-2xl font-semibold text-gray-700 mt-5">
                        <p class="text-2xl leading-8">
                            {{ __('Login Credentials' ) }}
                        </p>
                        <p class="text-base font-normal">Please make sure to not forgot your login credentials.</p>

                    </div>
                    <div class="grid grid-cols-2 gap-2">

                        <!-- Input[ype="email"] -->
                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="email" id="email" name="email" :value="{{ old('email') }}"
                                    value="{{ auth()->user()->email }}" class="block w-full" />
                                <x-floating-label for="email" :value="__('Email')" />
                            </div>
                            @error('email')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message
                                }}
                            </p>
                            @enderror
                        </div>

                        <!-- Input[ype="old_password"] -->
                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="password" id="old_password" name="old_password"
                                    class="block w-full" />
                                <x-floating-label for="old_password" :value="__('Old Password')" />
                            </div>
                            @error('old_password')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message
                                }}
                            </p>
                            @enderror
                        </div>

                        <!-- Input[ype="password"] -->
                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="password" id="password" name="password" class="block w-full" />
                                <x-floating-label for="password" :value="__('Password')" />
                            </div>
                            @error('password')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message
                                }}
                            </p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="password" id="confirm_password" name="password_confirmation"
                                    class="block w-full  " />
                                <x-floating-label for="password_confirmation" :value="__('Confirm Password')" />
                            </div>
                            @error('password_confirmation')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message
                                }}</p>
                            @enderror
                        </div>
                        <div class="col-end-3">
                            <div class="flex justify-end gap-2 mt-4">
                                <x-button
                                    class="block w-40 text-white bg-green-1000 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    {{ __('Register') }}
                                </x-button>
                                {{-- <x-button
                                    class="block w-40 text-white bg-gradient-to-br from-blue-500 to-purple-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    {{ __('Register') }}
                                </x-button> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

</x-app-layout>