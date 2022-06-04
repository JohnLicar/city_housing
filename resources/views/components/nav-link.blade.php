@props(['active'])

@if($active)
<span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-2xl rounded-br-2xl" aria-hidden="true"></span>
@endif
<a {{ $attributes->merge(['class' => 'inline-flex items-center w-full text-base font-semibold text-gray-800
    transition-colors duration-150 hover:text-gray-800 ']) }}>
    {{ $icon ?? '' }}
    <span class="ml-4">{{ $slot }}</span>
</a>