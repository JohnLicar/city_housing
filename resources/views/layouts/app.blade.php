<!DOCTYPE html>
<html x-data="data" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'City Housing Management System') }}</title>

    <link rel="icon" href="{{asset('images/logo.jpg')}}" />

    <!-- Styles  -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    @livewireStyles
</head>

<body>
    <div class="flex h-screen bg-white" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @livewire('livewire-ui-modal')
        <!-- Desktop sidebar -->
        @include('sweetalert::alert')
        @include('layouts.navigation')
        <!-- Mobile sidebar -->
        <!-- Backdrop -->

        @include('layouts.navigation-mobile')

        <div class="flex flex-col flex-1 min-w-full">

            @include('layouts.top-menu')

            <main class="sm:ml-0 md:ml-4 lg:ml-52">
                <div class="container px-6 mx-auto">
                    <div class="lg:px-16 sm:px-4">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('js/flowbite.js') }}"></script>
    @livewireScripts
    @livewire('toast.toast-notification')
    @stack('scripts')

</body>

</html>