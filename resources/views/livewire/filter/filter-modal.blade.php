<div>
    <div class=" p-4 w-full max-w-lg h-full md:h-auto">
        <div class=" bg-white rounded-lg dark:bg-gray-700">
            <div class="mb-5">
                <p class="font-medium text-xl text-left">Filter applciat</p>
                <p class="text-gray-500 text-sm text-left">All fields are required</p>
            </div>
            <div class="grid grid-cols-2 gap-6 ">
                <div>
                    <select wire:model="civil_status" name="civil_status" id="civil_status" class="'block p-3 w-full text-sm
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

                <div>
                    <div class="relative">
                        <x-floating-input type="text" id="income_per_month" name="income_per_month"
                            wire:model="income_per_month" class="block w-full border-2 " required />
                        <x-floating-label for="income_per_month" :value="__('Income per Month')" />
                    </div>
                </div>

                <div>
                    <div class="relative">
                        <x-floating-input type="text" id="office" name="office" wire:model="office"
                            class="block w-full border-2 " required />
                        <x-floating-label for="office" :value="__('Office')" />
                    </div>
                </div>

                <div>
                    <div class="relative">
                        <x-floating-input type="date" id="start" name="start" wire:model="start"
                            class="block w-full border-2 " required />
                        <x-floating-label for="start" :value="__('Start')" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
