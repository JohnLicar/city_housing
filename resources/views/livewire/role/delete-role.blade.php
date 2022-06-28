<div class="w-full max-w-md">
    <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
        <div class="px-6 pt-6 pb-3 bg-white border-b border-gray-200">
            <p class="text-left text-lg font-semibold">Confirm Delete</p>
            <p class="text-red-500 text-sm text-left">Please be careful as you cannot undo this action</p>
            <p class="text-left mt-4 mb-3">Since you are deleting a role, you need to select another role to assign to
                the
                users
                that has this role. Are you sure you want to delete this role?</p>
            <select wire:model="updatedRole" id="role" name="role"
                class="block px-2.5 p-3 w-full text-sm
            text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
            dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                <option selected>Select Role</option>
                @foreach ($roles as $role)
                    @if($role->name !== $selectedRole['name'])
                        <option value="{{ $role->name }}" @if ($role === $role->name) selected @endif>
                            {{ $role->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('updatedRole.id')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">
                    {{ $message }}</p>
            @enderror
            <div class="flex justify-end mt-5">
                <x-button.text-button btnType="secondary" wire:click="$emit('closeModal')">Cancel</x-button.text-button>
                <x-button.text-button btnType="error" wire:click="deleteRole">Delete</x-button.text-button>
            </div>
            {{-- {{$selectedPermissions}} --}}
        </div>
    </div>
</div>
