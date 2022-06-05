<x-guest-layout>
    <div class="basis-1/2 relative min-h-screen">
        <div class="flex items-center justify-center  sm:p-12">
            <div class="w-full h-full p-16 px-20">
                <div class="mb-4">
                    <p class=" text-4xl font-medium text-black">
                        Create Account.
                    </p>
                    <p>
                        Please fill-in all the fields to create your
                    </p>
                    <p> account.</p>
                </div>



                <div x-data="{ show: true }" x-show.transition.opacity.out.duration.2000ms="show"
                    x-init="setTimeout(() => show = false, 3000)">
                    <x-success-message />
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <p class="font-medium text-base">Basic Info</p>
                    <div class="grid grid-cols-2 gap-2">

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="first_name" name="first_name"
                                    value="{{ old('first_name') }}" class="block w-full " />
                                <x-floating-label for="first_name" :value="__('First Name')" />
                            </div>
                            @error('first_name')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="last_name" name="last_name"
                                    value="{{ old('last_name') }}" class="block w-full" required />
                                <x-floating-label for="last_name" :value="__('Last Name')" />
                            </div>
                            @error('last_name')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="contact" name="contact" value="{{ old('contact') }}"
                                    class="block w-full" required />
                                <x-floating-label for="contact" :value="__('Contact Number')" />
                            </div>
                            @error('contact')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <select id="gender" name="gender" class="block px-2.5 pb-2.5 pt-4 w-full text-sm
                        text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                        dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option>Select Gender</option>
                                <option value="Male" {{ old('gender')=="Male" ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender')=="Female" ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ old('gender')=="Other" ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('gender')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <p class="font-medium text-base my-4">Login Credentials</p>
                    <div>
                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="block w-full" required />
                                <x-floating-label for="email" :value="__('Email')" />
                            </div>
                            @error('email')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Input[ype="password"] -->
                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="password" id="password" name="password" class="block w-full" />
                                <x-floating-label for="password" :value="__('Password')" />
                            </div>
                            @error('password')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="password" id="confirm_password" name="password_confirmation"
                                    class="block w-full  " />
                                <x-floating-label for="password_confirmation" :value="__('Confirm Password')" />
                            </div>
                            @error('password_confirmation')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-4">
                        <x-button
                            class="block w-full text-white bg-gradient-to-br from-blue-500 to-purple-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>

                <div class="text-center">
                    <div class="mx-auto">
                        <p class="mt-4 ">
                            Already have an account?
                            <a class="text-base text-blue-600 hover:text-blue-800 underline decoration-wavy  font-medium text-primary-600 "
                                href="{{ route('login') }}">
                                {{ __('Log-In') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="basis-1/2 bg-teal-50 invisible sm:visible">

        <div class="item-center md:h-auto md:w-1/2 bg-teal-50 mx-auto mt-16 sm:h-auto ">
            <img aria-hidden="true" class="object-cover w-full" src="{{ asset('images/logo.png') }}" alt="Office" />
            <p class="mt-7 text-center text-4xl font-medium text-black">
                City Housing Project Management System
            </p>
        </div>
    </div>
</x-guest-layout>