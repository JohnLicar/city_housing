@props(['value'])

<label {{ $attributes->merge(['class' => 'absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform
    -translate-y-5 scale-75 top-2 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2
    peer-focus:text-blue-600
    peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2
    peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-5 left-1']) }}>
    {{ $value ?? $slot }}
</label>
