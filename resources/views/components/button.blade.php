<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 text-sm font-medium leading-5 text-center
    text-white transition-colors duration-150 bg-blue-1000 border border-transparent rounded-lg active:bg-blue-900
    hover:bg-blue-700 focus:outline-none focus:ring']) }}>
    {{ $slot }}
</button>