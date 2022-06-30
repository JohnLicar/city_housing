<div class="fixed {{ $cssPosition }} z-[10]" x-cloak>
    <div id="toast-{{ $toastType }}"
        class="flex items-center  w-full max-w-md px-4 pt-5 pb-5 text-{{ $cssTextColor }} {{ $cssBackground }} rounded-lg shadow-md dark:text-gray-400 dark:bg-gray-800"
        x-data="{ show: @this.message ? true : false, timeout: null, duration: null }" x-transition:enter="transition ease-in-out duration-300"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-14 opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-x-14" x-transition:leave-end="translate-x-14 opacity-0"
        @if ($message) x-init="() => { duration = @this.duration; clearTimeout(timeout); show = true;
                if( duration > 0 ) {timeout = setTimeout(() => { show = false }, duration); }}" @endif
        @new-toast.window="duration = @this.duration; clearTimeout(timeout); show = true;
                if( duration > 0 ) { timeout = setTimeout(() => { show = false; }, duration); }"
        x-show="show">

        @include('livewire.toast.icons.' . $toastType)

        <div class="flex flex-col pl-6 pr-8">
            <div class="ml-3 font-semibold">{{ $title }}</div>
            <div class="ml-3 text-sm font-normal">{{ $message }}</div>
        </div>
        <button type="button"
            class="absolute right-3 top-5 ml-auto -mx-1.5 -my-1.5 text-{{ $cssTextColor }} hover:bg-gray-500/20 rounded-lg focus:ring-2 focus:ring-gray-300/30 p-1.5 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800"
            @click="show = false; clearTimeout(timeout)" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

</div>
