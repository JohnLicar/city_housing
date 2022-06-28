<div>
    <p class="font-medium text-lg">Profile Image</p>
    <div class="flex items-center gap-4 mt-5">
        <div>
            @if ($photo)
            <img class="mx-2 h-32 w-32 rounded-full" src="{{ $photo->temporaryUrl() }}">
            @elseif (auth()->user()->avatar)
            <img src="{{ asset('images/profile/'. auth()->user()->avatar) }}" class="mx-2 h-32 w-32 rounded-full" />
            @else
            <img src="{{ asset('images/logo.jpg') }}" class="mx-2 h-32 w-32 rounded-full" />
            @endif
            @error('avatar')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message
                }}</p>
            @enderror
        </div>
        <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">

            <label type="file" class="px-6 bg-green-1000 py-2 text-sm font-medium leading-5 text-center
            text-white transition-colors duration-150  border border-transparent rounded-lg active:bg-green-900
            hover:bg-green-700 focus:outline-none focus:ring'">
                Upload
                <input class="hidden" type="file" name="avatar" wire:model="photo">
            </label>
            <div x-show="isUploading" class="w-full bg-gray-200 rounded-full">
                <progress
                    class="w-full bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    max="100" x-bind:value="progress"></progress>
            </div>
        </div>
        <div>
            <x-button btnType="error"
                wire:click="removePhoto">Remove
            </x-button>
        </div>

    </div>
</div>