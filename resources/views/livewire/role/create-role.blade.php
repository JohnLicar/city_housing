<div class="w-full max-w-md">
    <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
        <div class="px-6 pt-6 pb-3 bg-white border-b border-gray-200">
            <p class="text-left text-lg font-semibold">Create Role</p>
            <p class="text-left text-sm text-gray-500 mt-1">Please be careful when setting permissions for a role.</p>
            <div class="relative mt-4">
                <x-floating-input type="text" id="name" name="name" wire:model="role" class="block w-full" />
                <x-floating-label for="name" :value="__('User Role')" />
            </div>
            <div class="flex flex-wrap mt-4">
                @foreach ($permissions as $permission)
                    <div class="flex items-center mt-1 w-1/2">
                        <input wire:model="selectedPermissions" id="checkbox-{{ $permission->id }}" name="permissions"
                            type="checkbox" value="{{ $permission->id }}"
                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-{{ $permission->id }}"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            {{ $permission->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-end mt-5">
                <x-button.text-button btnType="secondary" wire:click="$emit('closeModal')">Cancel</x-button.text-button>
                <x-button.text-button btnType="success" wire:click="saveRole">Save Role</x-button.text-button>
            </div>
            {{-- {{$selectedPermissions}} --}}
        </div>
    </div>
</div>
