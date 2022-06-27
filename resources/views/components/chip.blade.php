@props(['event'])

@php


switch ($event) {

case 'Login Success':
$class = 'bg-green-500';
break;

case 'Login Failed':
$class = 'bg-red-500';
break;


case 'Logout':
$class = 'bg-red-500';
break;


case 'Failed':
$class = 'bg-red-500';
break;

case 'User Created':
$class = 'bg-green-500';
break;

case 'User Updated':
$class = 'bg-yellow-500';
break;

case 'Trashed User':
$class = 'bg-red-500';
break;

case 'User Restored':
$class = 'bg-green-500';
break;

case 'User Restored':
$class = 'bg-green-500';
break;

case 'User Profile Updated':
$class = 'bg-green-500';
break;



default:
$class = 'bg-gray-500';
break;
}
@endphp

{{-- @switch($event)
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
@endswitch --}}

<span class="rounded-full py-2 px-4 text-xs text-white whitespace-nowrap {{ $class }}">
    {{ $event }}
</span>