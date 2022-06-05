<!DOCTYPE html>
<html x-data="data" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'City Housing Management System') }}</title>
    <link rel="icon" href="{{asset('images/logo.jpg')}}" />


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
</head>

<body>
    <div class="absolute	">
        <p class="mt-7 ml-5 text-xl font-medium text-black">
            City Housing
        </p>
    </div>

    <div class="flex flex-row relative min-h-screen">
        {{ $slot }}
    </div>

</body>

</html>