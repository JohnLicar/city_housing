@props([
 'striped' => null
])
{{-- odd:bg-white even:bg-gray-100 odd:dark:bg-gray-800 even:dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 --}}
<tr class="{{$striped ? 'odd:bg-white even:bg-gray-100 odd:dark:bg-gray-800 even:dark:bg-gray-700' : 'hi'}}" {{ $attributes->merge(['class' => 'bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600'])}}>
 {{ $slot }}
</tr>
