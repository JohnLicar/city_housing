<div class="w-full max-w-md">
    <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
        <div class="px-6 pt-6 pb-3 bg-white border-b border-gray-200">
            <p class="text-left text-lg font-semibold">Change Password</p>
            <p class="text-left text-sm text-gray-500 mt-1">Please make sure to set a secured password.</p>
            <div class="relative mt-4">
                <x-floating-input type="password" id="current_password" name="current_password"
                    wire:model.debounce.400ms="current_password" class="block w-full" />
                <x-floating-label for="current_password" :value="__('Current Password')" />
            </div>
            @error('current_password')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">
                    {{ $message }}</p>
            @enderror
            <div class="relative mt-4">
                <x-floating-input type="password" id="password" name="password" wire:model="password"
                    class="block w-full" />
                <x-floating-label for="password" :value="__('New Password')" />
            </div>
            @error('password')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">
                    {{ $message }}</p>
            @enderror
            <div class="relative mt-4">
                <x-floating-input type="password" id="password_confirmation" name="password_confirmation"
                    wire:model="password_confirmation" class="block w-full" />
                <x-floating-label for="password_confirmation" :value="__('Confirm Password')" />
            </div>
            @error('password_confirmation')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">
                    {{ $message }}</p>
            @enderror
            <div class="flex justify-end mt-5">
                <x-button.text-button btnType="secondary" wire:click="$emit('closeModal')">Cancel</x-button.text-button>
                <x-button.text-button btnType="success" wire:click.prevent="updatePassword">
                    Update Password
                </x-button.text-button>
            </div>
        </div>
    </div>
</div>
