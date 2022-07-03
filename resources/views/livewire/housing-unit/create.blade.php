<div>
    <div class="w-9/12 ">
        <div class="overflow-auto bg-white shadow-sm w-96 sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <form wire:submit.prevent="saveHousingUnit" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <p class="text-xl font-medium text-left">Create new Housing Unit</p>
                        <p class="text-sm text-left text-gray-500">All fields are required</p>
                    </div>

                    <div>
                        <div class="mt-4">
                            <select wire:model="housing_project_id" name="housing_project_id" id="housing_project_id"
                                class="'block p-3 w-full text-sm
                        text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                        dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                @foreach ($housing_projects as $housing)
                                <option value="{{ $housing->id }}">
                                    {{ $housing->project }}
                                </option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="phase_no" name="phase_no" wire:model="phase_no"
                                    class="block w-full border-2 " required />
                                <x-floating-label for="phase_no" :value="__('Phase Number')" />
                            </div>
                            @error('phase_no')
                            <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="block_no" name="block_no" wire:model="block_no" />
                                <x-floating-label for="block_no" :value="__('Block Number')" />
                            </div>
                            @error('block_no')
                            <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="lot_no" name="lot_no" wire:model="lot_no" required />
                                <x-floating-label for="lot_no" :value="__('Lot Number')" />
                            </div>
                            @error('lot_no')
                            <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input type="text" id="remark" name="remark" wire:model="remark" required />
                                <x-floating-label for="remark" :value="__('Remark')" />
                            </div>
                            @error('remark')
                            <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>


                    </div>

                    <div class="flex justify-end mt-5">
                        <x-button.text-button btnType="secondary" wire:click="$emit('closeModal')">Cancel
                        </x-button.text-button>
                        <x-button.text-button btnType="success" wire:click="saveHousingUnit">Save Housing
                            Unit
                        </x-button.text-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
