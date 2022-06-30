@props([
    'btnType' => 'primary',
])


@php

switch ($btnType) {
    case 'success':
        $class = 'text-green-1000 active:bg-green-900/[.20] hover:text-green-500 hover:bg-green-700/[.20]';
        break;

    case 'error':
        $class = 'text-red-1000 active:bg-red-900/[.20] hover:text-red-500 hover:bg-red-700/[.20]';
        break;

    case 'warning':
        $class = 'text-orange-1000 active:bg-orange-900/[.20] hover:text-orange-500 hover:bg-orange-700/[.20]';
        break;

    case 'secondary':
        $class = 'text-gray-500 active:bg-gray-900/[.20] hover:text-gray-500 hover:bg-gray-700/[.20]';
        break;

    default:
        $class = 'text-blue-1000 active:bg-blue-900/[.20] hover:text-blue-500 hover:bg-blue-700/[.20]';
        break;
}

@endphp

<button {{ $attributes }}
    {{$attributes->merge(['class' => 'px-4 py-2 text-sm font-medium leading-5 text-center transition-colors duration-150  border border-transparent rounded-lg focus:outline-none focus:ring-0 '.$class.''])}}>
    {{ $slot }}
</button>
