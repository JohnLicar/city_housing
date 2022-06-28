@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 rounded-md shadow-sm
focus:border-primary-100 focus:ring-0 focus:ring-primary-200 focus:ring-opacity-50 focus:outline-none focus-within:text-primary-600']) !!}>