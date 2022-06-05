<aside class="z-20 hidden w-64 overflow-y-auto bg-white border-r-2 md:block flex-shrink-0">
    <div class="py-4">
        <div>
            <p class="ml-6 mt-5 text-lg font-medium text-black">
                Main Menu
            </p>

            <ul class=" mt-4">
                <li class="relative px-6 py-2 ">
                    <x-nav-link class="{{ request()->routeIs('dashboard') ? 'text-blue-600' : 'text-cool-gray-600' }} "
                        href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </x-slot>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>

                @role('User|Admin')
                <li class="relative px-6 py-2">
                    <x-nav-link
                        class="{{ request()->routeIs('applicants.*') ? 'text-blue-600' : 'text-cool-gray-600' }}"
                        href="{{ route('applicants.index') }}" :active="request()->routeIs('applicants.*')">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                            </svg>
                        </x-slot>
                        {{ __('Applicants') }}
                    </x-nav-link>
                </li>
                @endrole

                @role('Admin')
                <li class="relative px-6 py-2">
                    <x-nav-link class="{{ request()->routeIs('users.*') ? 'text-blue-600' : 'text-cool-gray-600' }}"
                        href="{{ route('users.index') }}" :active="request()->routeIs('users.*')">

                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>

                        </x-slot>
                        {{ __('Users') }}
                    </x-nav-link>
                </li>

                <li class="relative px-6 py-2">
                    <x-nav-link href="{{ route('users.index') }}" :active="false" class="text-cool-gray-600">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                        </x-slot>
                        {{ __('Housing Projects') }}
                    </x-nav-link>
                </li>
                @endrole
            </ul>
        </div>

        <div>
            <p class="ml-6 mt-5 text-lg font-medium text-black">
                Configurations
            </p>

            <ul class="mt-4">


                @role('Admin')
                <li class="relative px-6 py-2">
                    <x-nav-link href="{{ route('users.index') }}" :active="false" class="text-cool-gray-600">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </x-slot>
                        {{ __('System Settings') }}
                    </x-nav-link>
                </li>

                <li class="relative px-6 py-2">
                    <x-nav-link href="{{ route('users.index') }}" :active="false" class="text-cool-gray-600">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd" />
                            </svg>
                        </x-slot>
                        {{ __('User Roles') }}
                    </x-nav-link>
                </li>
                @endrole
            </ul>
        </div>

        <div>
            <p class="ml-6 mt-5 text-lg font-medium text-black">
                Account
            </p>

            <ul class="mt-4">
                @role('Admin')
                <li class="relative px-6 py-2">
                    <x-nav-link href="{{ route('users.index') }}" :active="false" class="text-cool-gray-600">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                    clip-rule="evenodd" />
                            </svg>
                        </x-slot>
                        {{ __('Accounts Logs') }}
                    </x-nav-link>
                </li>

                <li class="relative px-6 py-2">
                    <x-nav-link href="{{ route('users.index') }}" :active="false" class="text-cool-gray-600">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </x-slot>
                        {{ __('Accounts Settings') }}
                    </x-nav-link>
                </li>
                @endrole
            </ul>
        </div>
        <div>

        </div>

        <div class="relative h-32 w-32">
            <div class="absolute inset-x-0 bottom-0 h-16">
                <div class="flex items-center px-3">
                    <div class="flex-shrink-0 h-16 w-16">
                        <img src="{{ asset('images/logo.jpg') }}" class="mx-2 h-16 w-16 rounded-full" />
                    </div>
                    <div class="ml-4 text-base">
                        <div class=" font-medium text-gray-900">
                            {{ auth()->user()->full_name }}

                        </div>
                        <div class=" text-gray-500">
                            {{ auth()->user()->email }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>