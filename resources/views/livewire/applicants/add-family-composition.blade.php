<div>
    @foreach ($familyCompositions as $index => $familyComposition)
    <div class="border-b-2 pb-5">
        <div class="grid grid-cols-3 gap-6 ">
            <div class="mt-4">
                <div class="relative">
                    <x-floating-input type="text" id="familyCompositions[{{$index}}][first_name]"
                        name="familyCompositions[{{$index}}][first_name]" class="block w-full border-2 " required />
                    <x-floating-label for="familyCompositions[{{$index}}][first_name]" :value="__('First Name')" />
                </div>
                @error('familyCompositions[{{$index}}][middle_name]')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                    $message
                    }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <div class="relative">
                    <x-floating-input type="text" id="familyCompositions[{{$index}}][middle_name]"
                        name="familyCompositions[{{$index}}][middle_name]" class="block w-full border-2 " required />
                    <x-floating-label for="familyCompositions[{{$index}}][middle_name]" :value="__('Middle Name')" />
                </div>
                @error('familyCompositions[{{$index}}][middle_name]')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                    $message
                    }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <div class="relative">
                    <x-floating-input type="text" id="familyCompositions[{{$index}}][last_name]"
                        name="familyCompositions[{{$index}}][last_name]" class="block w-full border-2 " required />
                    <x-floating-label for="familyCompositions[{{$index}}][last_name]" :value="__('Last Name')" />
                </div>
                @error('familyCompositions[{{$index}}][last_name]')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                    $message
                    }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <div class="relative">
                    <x-floating-input type="text" id="familyCompositions[{{$index}}][relation]"
                        name="familyCompositions[{{$index}}][relation]" class="block w-full border-2 " required />
                    <x-floating-label for="familyCompositions[{{$index}}][relation]" :value="__('Relation')" />
                </div>
                @error('familyCompositions[{{$index}}][relation]')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                    $message
                    }}</p>
                @enderror
            </div>

            <div class="mt-4">

                <select name="familyCompositions[{{$index}}][civil_status]"
                    id="familyCompositions[{{$index}}][civil_status]" class="'block p-3 w-full text-sm
                text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <option value="Single">
                        Single
                    </option>

                    <option value="Married">
                        Married
                    </option>

                    <option value="Widowed">
                        Widowed
                    </option>
                    <option value="Divorced">
                        Divorced
                    </option>
                </select>
            </div>

            <div class="mt-4">
                <div class="relative">
                    <x-floating-input type="text" id="familyCompositions[{{$index}}][age]"
                        name="familyCompositions[{{$index}}][age]" class="block w-full border-2 " required />
                    <x-floating-label for="familyCompositions[{{$index}}][age]" :value="__('Age')" />
                </div>
                @error('familyCompositions[{{$index}}][age]')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                    $message
                    }}</p>
                @enderror
            </div>
            <div class="mt-4">
                <div class="relative">
                    <x-floating-input type="text" id="familyCompositions[{{$index}}][source_of_income]"
                        name="familyCompositions[{{$index}}][source_of_income]" class="block w-full border-2 "
                        required />
                    <x-floating-label for="familyCompositions[{{$index}}][source_of_income]"
                        :value="__('Source of Income')" />
                </div>
                @error('familyCompositions[{{$index}}][source_of_income]')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                    $message
                    }}</p>
                @enderror
            </div>
        </div>
    </div>
    @endforeach

    {{--
    @for ($index = 0; $index < $count; $index++) <div class="border-b-2 pb-5">
        <div class="grid grid-cols-3 gap-6 ">
            <div class="mt-4">
                <div class="relative">
                    <x-floating-input name="familyCompositions[{{$index}}][first_name]" placeholder="{{ $index}}"
                        type="text" class="py-1 px-2 rounded block w-full border-2 " />
                    <x-floating-label for="first_name" :value="__('First Name')" />
                </div>

            </div>
            <div class="mt-4">
                <div class="relative">
                    <x-floating-input name="familyCompositions[{{$index}}][middle_name]" placeholder="{{ $index}}"
                        type="text" class="py-1 px-2 block w-full border-2  rounded" />
                    <x-floating-label for="first_name" :value="__('First Name')" />
                </div>

            </div>
            <div class="mt-4">
                <div class="relative">
                    <x-floating-input name="familyCompositions[{{$index}}][last_name]" placeholder="{{ $index}}"
                        type="text" class="py-1 px-2 block w-full border-2 rounded" />
                    <x-floating-label for="first_name" :value="__('First Name')" />

                </div>
            </div>

            <div class="mt-4">
                <div class="relative">
                    <x-floating-input type="text" id="first_name" name="familyCompositions[{{$index}}][first_name]"
                        class="block w-full border-2 " required />
                    <x-floating-label for="first_name" :value="__('First Name')" />
                </div>
                @error('first_name')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                    $message
                    }}</p>
                @enderror
            </div>

        </div>
</div>
@endfor --}}


<div class="flex items-center justify-end ">
    <button wire:click.prevent="addItem()" class="ml-3 mt-3 cursor-pointer px-4 py-2 text-sm font-medium leading-5
            text-center
            text-white transition-colors duration-150 bg-gray-800 border border-transparent rounded-lg
            active:bg-purple-600
            hover:bg-purple-700 focus:outline-none focus:ring">
        {{ __('Add Family Member') }}
    </button>
</div>
</div>
