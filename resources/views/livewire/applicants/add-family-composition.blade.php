<div>
    <div class="grid grid-cols-3 gap-6 ">
        <div>
            <x-label for="first_name" :value="__('First Name')" />
            <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"
                autofocus />
        </div>

        <div>
            <x-label for="middle_name" :value="__('Middle Name')" />
            <x-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name"
                :value="old('middle_name')" />
        </div>

        <div>
            <x-label for="last_name" :value="__('Last Name')" />
            <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" />
        </div>

        <div>
            <x-label for="relation" :value="__('Relation')" />
            <x-input id="relation" class="block mt-1 w-full" type="text" name="relation" :value="old('relation')" />
        </div>

        <div>
            <x-label for="civil_status" :value="__('Civil Status')" />
            <select name="civil_status" id="civil_status" class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
        focus:ring-indigo-200 focus:ring-opacity-50">
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

        <div>
            <x-label for="age" :value="__('Age')" />
            <x-input id="age" class="block mt-1 w-full" type="text" name="age" :value="old('age')" />
        </div>
        <div>
            <x-label for="source_of_income" :value="__('Source of Income')" />
            <x-input id="source_of_income" class="block mt-1 w-full" type="text" name="source_of_income"
                :value="old('source_of_income')" />
        </div>

    </div>

    <div class="flex items-center justify-end ">
        <button class="ml-3 mt-3 cursor-pointer px-4 py-2 text-sm font-medium leading-5 text-center
        text-white transition-colors duration-150 bg-gray-800 border border-transparent rounded-lg active:bg-purple-600
        hover:bg-purple-700 focus:outline-none focus:ring">
            {{ __('Add Family Member') }}
        </button>
    </div>
</div>