@props([
    'btnType' => 'primary',
    'nowrap' => false
])


@php

$nowrap = $nowrap ? 'whitespace-nowrap' : '';

switch ($btnType) {
    case 'info':
        $class = 'bg-blue-500 active:bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 ';
        break;

    case 'success':
        $class = 'bg-green-1000 active:bg-green-900 hover:bg-green-700 focus:ring-2 focus:ring-offset-2 focus:ring-green-500 ';
        break;

    case 'error':
        $class = 'bg-red-1000 active:bg-red-900 hover:bg-red-700 focus:ring-2 focus:ring-offset-2 focus:ring-red-500 ';
        break;

    case 'warning':
        $class = 'bg-orange-500 active:bg-orange-700 hover:bg-orange-600 focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 ';
        break;

    case 'secondary':
        $class = 'bg-gray-500 active:bg-gray-900 hover:bg-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 ';
        break;

    default:
        $class = 'bg-blue-1000 active:bg-blue-900 hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 ';
        break;
}

@endphp

<button {{ $attributes }}
    {{ $attributes->merge(['class' => 
        'px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150  border border-transparent rounded-lg focus:outline-none focus:ring-0 '
        .$class.'' .$nowrap.''])}}>
    {{ $slot }}
</button>
