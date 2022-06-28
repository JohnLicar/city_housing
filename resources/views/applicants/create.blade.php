<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <x-auth-validation-errors />
                <h2 class="my-6 ml-5 text-2xl font-semibold text-gray-700">
                    Applicants Information
                </h2>
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{  route('applicants.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="border-b border-gray-200 pb-5">

                            <p class="font-medium text-base">Housing Project</p>
                            <div class="grid grid-cols-4 gap-6 mb-5">
                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="phase_no" name="phase_no"
                                            class="block w-full border-2 " required />
                                        <x-floating-label for="phase_no" :value="__('Phase No.')" />
                                    </div>
                                    @error('phase_no')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="block_no" name="block_no"
                                            class="block w-full border-2 " required />
                                        <x-floating-label for="block_no" :value="__('Block No.')" />
                                    </div>
                                    @error('block_no')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="lot_no" name="lot_no"
                                            class="block w-full border-2 " required />
                                        <x-floating-label for="lot_no" :value="__('Lot No.')" />
                                    </div>
                                    @error('block_no')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <select name="housing_project_id" id="housing_project_id" class=" 'block p-3 w-full text-sm
                                text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                                dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                        @foreach ($housing_projects as $housing)
                                        <option value="{{ $housing->id }}">
                                            {{ $housing->project }}
                                        </option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>


                            <p class="font-medium text-base">Basic Info</p>
                            <div class="grid grid-cols-3 gap-6 ">
                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="first_name" name="first_name"
                                            class="block w-full border-2 " :value="old('first_name')" required />
                                        <x-floating-label for="first_name" :value="__('First Name')" />
                                    </div>
                                    @error('first_name')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="middle_name" name="middle_name"
                                            :value="old('middle_name')" />
                                        <x-floating-label for="middle_name" :value="__('Middle Name')" />
                                    </div>
                                    @error('middle_name')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="last_name" name="last_name"
                                            :value="old('last_name')" required />
                                        <x-floating-label for="last_name" :value="__('Last Name')" />
                                    </div>
                                    @error('last_name')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="suffix" :value="old('suffix')"
                                            name="suffix" />
                                        <x-floating-label for="suffix" :value="__('Suffix')" />
                                    </div>
                                    @error('suffix')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>



                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="birth_date" name="birth_date"
                                            :value="old('birth_date')" required />
                                        <x-floating-label for="birth_date" :value="__('Birthday')" />
                                    </div>
                                    @error('birth_date')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="place_of_birth" name="place_of_birth"
                                            :value="old('place_of_birth')" required />
                                        <x-floating-label for="place_of_birth" :value="__('Place of Birth')" />
                                    </div>
                                    @error('place_of_birth')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <select name="civil_status" id="civil_status"
                                        class=" 'block p-3 w-full text-sm
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
                                        <x-floating-input type="text" id="citizenship" name="citizenship"
                                            :value="old('citizenship')" required />
                                        <x-floating-label for="citizenship" :value="__('Citizenship')" />
                                    </div>
                                    @error('citizenship')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="brgy_origin" name="brgy_origin"
                                            :value="old('brgy_origin')" required />
                                        <x-floating-label for="brgy_origin" :value="__('Residence/Address')" />
                                    </div>
                                    @error('brgy_origin')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="contact" name="contact"
                                            :value="old('contact')" required />
                                        <x-floating-label for="contact" :value="__('Contact')" />
                                    </div>
                                    @error('contact')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="office" name="office" :value="old('office')"
                                            required />
                                        <x-floating-label for="office" :value="__('Office')" />
                                    </div>
                                    @error('office')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="tin_no" name="tin_no" :value="old('tin_no')"
                                            required />
                                        <x-floating-label for="tin_no" :value="__('TIN No.')" />
                                    </div>
                                    @error('tin_no')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="govt_id" name="govt_id"
                                            :value="old('govt_id')" required />
                                        <x-floating-label for="govt_id" :value="__('GSIS/SSS/Pag-ibig No.')" />
                                    </div>
                                    @error('govt_id')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>


                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="income_per_month" name="income_per_month"
                                            :value="old('income_per_month')" required />
                                        <x-floating-label for="income_per_month" :value="__('Income per Month')" />
                                    </div>
                                    @error('income_per_month')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Spouse Information --}}
                            <p class="font-medium text-base mt-5">Spouse Info</p>
                            <div class="grid grid-cols-3 gap-6 ">
                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="spouse_first_name" name="spouse_first_name"
                                            :value="old('spouse_first_name')" class="block w-full border-2 " required />
                                        <x-floating-label for="spouse_first_name" :value="__('Spouse First Name')" />
                                    </div>
                                    @error('spouse_first_name')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="spouse_middle_name" name="spouse_middle_name"
                                            :value="old('spouse_middle_name')" />
                                        <x-floating-label for="spouse_middle_name" :value="__('Spouse Middle Name')" />
                                    </div>
                                    @error('spouse_middle_name')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="spouse_last_name" name="spouse_last_name"
                                            :value="old('spouse_last_name')" required />
                                        <x-floating-label for="spouse_last_name" :value="__('Spouse Last Name')" />
                                    </div>
                                    @error('spouse_last_name')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="spouse_birth_date" name="spouse_birth_date"
                                            :value="old('spouse_birth_date')" required />
                                        <x-floating-label for="spouse_birth_date" :value="__('Birthday')" />
                                    </div>
                                    @error('spouse_birth_date')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <div class="relative">
                                        <x-floating-input type="text" id="spouse_birth_date"
                                            name="spouse_place_of_birth" :value="old('spouse_place_of_birth')"
                                            required />
                                        <x-floating-label for="spouse_place_of_birth" :value="__('Place of Birth')" />
                                    </div>
                                    @error('spouse_place_of_birth')
                                    <p id="outlined_error_help"
                                        class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                        $message
                                        }}</p>
                                    @enderror
                                </div>


                            </div>
                        </div>

                        {{-- Split --}}
                        <p class="font-medium text-base mt-5">Family Composition</p>

                        <div class="border-b border-gray-200 pb-5">
                            @livewire('applicants.add-family-composition')
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-back-button href="{{ route('applicants.index') }}" class="ml-3">
                                {{ __('Back') }}
                            </x-back-button>
                            <x-button class="ml-3">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
