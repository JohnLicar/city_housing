<x-guest-layout>
    <div class="basis-1/2 h-screen">
        <div class="flex items-center justify-center  sm:p-12">
            <div class="w-full p-16 px-40">
                <div class="mb-4">
                    <p class="mt-7  text-4xl font-medium text-black">
                        Welcome Back
                    </p>
                    <p>
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
                    </div>

                    <!-- Input[ype="password"] -->
                    <div class="mt-4">
                        <div class="relative">
                            <x-floating-input type="password" id="password" name="password" class="block w-full" />
                            <x-floating-label for="password" :value="__('Password')" />
                        </div>
                    </div>

                    {{-- <div class="flex mt-6 text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox" name="remember"
                                class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple">
                            <span class="ml-2">{{ __('Remember me') }}</span>
                        </label>
                    </div> --}}

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
                    {{-- <p class="mt-4">
                        <a class="text-sm font-medium text-primary-600 hover:underline"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </p> --}}

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
    <div class="basis-1/2 bg-teal-50 invisible sm:visible">

        <div class="item-center md:h-auto md:w-1/2 bg-teal-50 mx-auto mt-16 sm:h-auto ">
            <img aria-hidden="true" class="object-cover w-full" src="{{ asset('images/logo.png') }}" alt="Office" />
            <p class="mt-7 text-center text-4xl font-medium text-black">
                City Housing Project Management System
            </p>
        </div>
    </div>
</x-guest-layout>