<x-guest-layout>
    <div class="basis-1/2 sm:basis-full h-screen">
        <div class="flex items-center justify-center sm:p-12 h-full">
            <div class="w-full px-14 max-w-md">
                <div class="mb-4">
                    <img aria-hidden="true" class="object-cover mx-auto hidden sm:block sm:max-w-[60%]"
                        src="{{ asset('images/logo.png') }}" alt="Office" />
                    <p class="mt-7 text-4xl font-medium text-black sm:text-center">
                        Welcome Back
                    </p>
                    <p class="sm:text-center">
                        Please log-in your account to proceed.
                    </p>
                </div>


                <div x-data="{ show: true }" x-show.transition.opacity.out.duration.2000ms="show"
                    x-init="setTimeout(() => show = false, 3000)">
                    <x-success-message />
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Input[ype="email"] -->
                    <div class="mt-4">
                        <div class="relative">
                            <x-floating-input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="block w-full" required />
                            <x-floating-label for="email" :value="__('Email')" />
                        </div>
                        @error('email')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}
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
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex items-center mr-4  mt-6 ">
                        <input id="inline-checkbox" type="checkbox" name="remember"
                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-checkbox"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Remember me')
                            }}</label>
                    </div>

                    <div class="mt-4">
                        <x-button
                            class="block w-full text-white bg-gradient-to-br from-blue-500 to-purple-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>

                @if (Route::has('password.request'))
                <div class="text-center">
                    <div class="mx-auto">
                        <p class="mt-4 ">
                            Don't have an account?
                            <a class="text-base text-blue-600 hover:text-blue-800 underline decoration-wavy  font-medium text-primary-600 "
                                href="{{ route('register') }}">
                                {{ __('Sign-Up') }}
                            </a>
                        </p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="basis-1/2 bg-teal-50 sm:hidden">

        <div class="item-center md:h-auto md:w-1/2 bg-teal-50 mx-auto mt-16 sm:h-auto ">
            <img aria-hidden="true" class="object-cover w-full" src="{{ asset('images/logo.png') }}" alt="Office" />
            <p class="mt-7 text-center text-4xl font-medium text-black">
                City Housing Project Management System
            </p>
        </div>
    </div>
</x-guest-layout>