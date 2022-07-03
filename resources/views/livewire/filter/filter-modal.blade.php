<div>
    <div class=" p-4 w-auto  h-full md:h-auto">
        <div class=" bg-white rounded-lg dark:bg-gray-700">
            <div class="mb-5">
                <p class="font-medium text-xl text-left">Filter applciat</p>
                <p class="text-gray-500 text-sm text-left">All fields are required</p>
            </div>
            <div class="grid grid-cols-2 gap-6 ">
                <div class="mt-5">
                    <select wire:model="filterable.civil_status" name="civil_status" id="civil_status" class="'block p-3 w-full text-sm
                text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">

                        <option value="">
                            --Civil Status--
                        </option>

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
                    <div class="relative mt-5">
                        <x-floating-input type="text" id="office" name="office" wire:model="filterable.office"
                            class="block w-full border-2 " required />
                        <x-floating-label for="office" :value="__('Office')" />
                    </div>
                </div>

                <div>
                    <span>Income per Month</span>
                    <div class="flex justify-center gap-2">
                        <div>
                            <span>From</span>
                            <div class="relative mt-2">
                                <x-floating-input wire:model="filterable.start_income_per_month" type="text"
                                    id="start_income_per_month" name="start_income_per_month"
                                    class="block w-full border-2 " required />
                                <x-floating-label for="start_income_per_month" :value="__('Income per Month')" />
                            </div>
                        </div>

                        <div>
                            <span>To</span>
                            <div class="relative mt-2">
                                <x-floating-input wire:model="filterable.end_income_per_month" type="text"
                                    id="end_income_per_month" name="end_income_per_month" class="block w-full border-2 "
                                    required />
                                <x-floating-label for="end_income_per_month" :value="__('Income per Month')" />
                            </div>
                        </div>
                    </div>
                </div>



                <div>
                    <span>Birthday</span>
                    <div class="flex  items-center justify-center gap-2">
                        <div>
                            <span>From</span>
                            <input wire:model="filterable.start" id="datepicker" type="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date">
                        </div>

                        <div>
                            <span>To</span>
                            <input wire:model="filterable.end" id="datepicker" type="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end gap-4 mt-5">
                <x-button.text-button wire:click="resetFilter" btn-type="error">Reset Filter</x-button.text-button>
                <x-button wire:click="filterApplicant">Filter</x-button>
            </div>
        </div>
    </div>
</div>
