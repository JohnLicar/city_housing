@props(['event'])

@php
$class = 'bg-gray-500';
@endphp

@switch($event)
    @case('Login Success')
        @php
        $class = 'bg-green-500';
        @endphp
    @break

    @case('Login Failed')
        @php
        $class = 'bg-red-500';
        @endphp
    @break

    @default
@endswitch

<span class="rounded-full py-2 px-4 text-xs text-white whitespace-nowrap {{ $class }}">
    {{ $event }}
</span>
