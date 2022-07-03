<div>
    <div class="p-4 mx-4 ">
        <div class="flex items-center">
            <div class="relative flex items-center text-teal-600">
                <div class="w-12 h-12 py-3 transition duration-500 ease-in-out border-2 border-teal-600 rounded-full
                @if ($counter > 1)
                    bg-teal-600
                    text-white
                    @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="absolute top-0 w-32 mt-16 -ml-10 text-xs font-medium text-center text-teal-600 uppercase">
                    Check Applicant</div>
            </div>


            <span class="flex-auto transition duration-500 ease-in-out border-t-2 @if ($counter >= 2)
            border-teal-600
            @endif"></span>
            <div class="relative flex items-center text-gray-500">
                <div class="w-12 h-12 py-3 transition duration-500 ease-in-out  border-2  rounded-full
                    @if ($counter > 2)
                    bg-teal-600
                    text-white
                    @endif
                    @if ($counter == 2)
                    border-teal-600
                    @endif
                    ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        <circle cx="8.5" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="absolute top-0 w-32 mt-16 -ml-10 text-xs font-medium text-center   @if ($counter == 2)
                text-teal-600
                @endif uppercase">
                    Applicant Info</div>
            </div>

            <div class="flex-auto transition duration-500 ease-in-out border-t-2 @if ($counter >= 3)
                border-teal-600
                @endif"></div>
            <div class="relative flex items-center text-gray-500">
                <div class="w-12 h-12 py-3 transition duration-500 ease-in-out border-2  rounded-full
                @if ($counter > 3)
                bg-teal-600
                text-white
                @endif
                @if ($counter == 3)
                border-teal-600
                @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-mail ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />

                    </svg>


                </div>
                <div class="absolute top-0 w-32 mt-16 -ml-10 text-xs font-medium text-center text-gray-500 uppercase">
                    Spouse and Family Composition</div>
            </div>

            <div class="flex-auto transition duration-500 ease-in-out border-t-2 @if ($counter >= 4)
                border-teal-600
                @endif"></div>
            <div class="relative flex items-center text-gray-500">
                <div class="w-12 h-12 py-3 transition duration-500 ease-in-out border-2  rounded-full
                @if ($counter > 4)
                bg-teal-600
                text-white
                @endif
                @if ($counter == 4)
                border-teal-600
                @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-mail ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />

                    </svg>


                </div>
                <div class="absolute top-0 w-32 mt-16 -ml-10 text-xs font-medium text-center text-gray-500 uppercase">
                    Housing Project and Requirements</div>
            </div>


            <div class="flex-auto transition duration-500 ease-in-out border-t-2 border-gray-300"></div>
            <div class="relative flex items-center text-gray-500">
                <div class="w-12 h-12 py-3 transition duration-500 ease-in-out border-2 border-gray-300 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-database ">
                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                    </svg>
                </div>
                <div class="absolute top-0 w-32 mt-16 -ml-10 text-xs font-medium text-center text-gray-500 uppercase">
                    Confirm</div>
            </div>
        </div>
    </div>
    <div class="mt-20">

        <div>
            @if ($counter == 1)
            <div class="grid grid-cols-3 gap-2">
                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="first_name" type="text" id="first_name" name="first_name"
                            class="block w-full border-2 " :value="old('first_name')" required />
                        <x-floating-label for="first_name" :value="__('First Name')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="middle_name" type="text" id="middle_name"
                            name="middle_name" :value="old('middle_name')" />
                        <x-floating-label for="middle_name" :value="__('Middle Name')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="last_name" type="text" id="last_name" name="last_name"
                            :value="old('last_name')" required />
                        <x-floating-label for="last_name" :value="__('Last Name')" />
                    </div>
                </div>
            </div>


            <div class="container mt-5 overflow-x-auto">
                <p class="my-5 text-lg font-normal">Applicant informations</p>

                <x-table>
                    <x-slot name="head">
                        <x-table.heading sortable multi-column wire:click="sortBy('info.first_name')"
                            :direction="$sorts['info.first_name'] ?? null">
                            First Name
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('middle_name')"
                            :direction="$sorts['middle_name'] ?? null">
                            Middle Name
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('last_name')"
                            :direction="$sorts['last_name'] ?? null">
                            Last Name
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('birth_date')"
                            :direction="$sorts['birth_date'] ?? null">
                            Date of Birth
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('civil_status')"
                            :direction="$sorts['civil_status'] ?? null">
                            Civil Status

                        </x-table.heading>

                        <x-table.heading sortable multi-column wire:click="sortBy(' created_at')"
                            :direction="$sorts[' created_at'] ?? null">
                            Added On
                        </x-table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @forelse ($applicants as $applicant)
                        <x-table.row wire:loading.class="opacity-50">
                            <x-table.cell class="cell">
                                {{ $applicant->info->first_name }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $applicant->info->middle_name }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $applicant->info->last_name }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $applicant->info->birth_date }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $applicant->info->civil_status }}
                            </x-table.cell>

                            <x-table.cell class="cell">
                                {{ $applicant->created_at->format('F j, Y h:i:s A') }}
                            </x-table.cell>

                        </x-table.row>
                        @empty
                        <td class="py-6" colspan="5">
                            <div class="flex flex-col justify-center place-items-center align-center">
                                <img class="w-24 h-24" src="{{ asset('images/empty.svg') }}" alt="Empty" />
                                <div class="">
                                    <p class="mt-5 text-gray-500">
                                        No data available ...
                                    </p>
                                </div>
                            </div>
                        </td>
                        @endforelse
                    </x-slot>
                </x-table>
                <div class="mt-5 mb-5">
                    {{ $applicants->onEachSide(0)->links() }}
                </div>
            </div>


            <div class="container mt-5 overflow-x-auto">
                <p class="my-5 text-lg font-normal">Spouse informations</p>

                <x-table>
                    <x-slot name="head">
                        <x-table.heading sortable multi-column wire:click="sortBy('info.first_name')"
                            :direction="$sorts['info.first_name'] ?? null">
                            First Name
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('middle_name')"
                            :direction="$sorts['middle_name'] ?? null">
                            Middle Name
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('last_name')"
                            :direction="$sorts['last_name'] ?? null">
                            Last Name
                        </x-table.heading>

                        <x-table.heading sortable multi-column wire:click="sortBy('civil_status')"
                            :direction="$sorts['civil_status'] ?? null">
                            Spouse of
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('birth_date')"
                            :direction="$sorts['birth_date'] ?? null">
                            Date of Birth
                        </x-table.heading>



                        <x-table.heading sortable multi-column wire:click="sortBy('civil_status')"
                            :direction="$sorts['civil_status'] ?? null">
                            Place of Birth
                        </x-table.heading>

                        <x-table.heading sortable multi-column wire:click="sortBy(' created_at')"
                            :direction="$sorts[' created_at'] ?? null">
                            Added On
                        </x-table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @forelse ($spouses as $spouse)
                        <x-table.row wire:loading.class="opacity-50">
                            <x-table.cell class="cell">
                                {{ $spouse->spouse->spouse_first_name }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $spouse->spouse->spouse_middle_name }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $spouse->spouse->spouse_last_name }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $spouse->info->full_name }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $spouse->spouse->spouse_birth_date }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $spouse->spouse->spouse_place_of_birth }}
                            </x-table.cell>

                            <x-table.cell class="cell">
                                {{ $spouse->created_at->format('F j, Y h:i:s A') }}
                            </x-table.cell>

                        </x-table.row>
                        @empty
                        <td class="py-6" colspan="5">
                            <div class="flex flex-col justify-center place-items-center align-center">
                                <img class="w-24 h-24" src="{{ asset('images/empty.svg') }}" alt="Empty" />
                                <div class="">
                                    <p class="mt-5 text-gray-500">
                                        No data available ...
                                    </p>
                                </div>
                            </div>
                        </td>
                        @endforelse
                    </x-slot>
                </x-table>
                <div class="mt-5 mb-5">
                    {{ $spouses->onEachSide(0)->links() }}
                </div>
            </div>

            <div class="container mt-5 overflow-x-auto">
                <p class="my-5 text-lg font-normal">Family Composition informations</p>

                <x-table>
                    <x-slot name="head">
                        <x-table.heading sortable multi-column wire:click="sortBy('info.first_name')"
                            :direction="$sorts['info.first_name'] ?? null">
                            First Name
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('middle_name')"
                            :direction="$sorts['middle_name'] ?? null">
                            Middle Name
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('last_name')"
                            :direction="$sorts['last_name'] ?? null">
                            Last Name
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('birth_date')"
                            :direction="$sorts['birth_date'] ?? null">
                            Relation
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('civil_status')"
                            :direction="$sorts['civil_status'] ?? null">
                            Applicant Name
                        </x-table.heading>

                        <x-table.heading sortable multi-column wire:click="sortBy(' created_at')"
                            :direction="$sorts[' created_at'] ?? null">
                            Added On
                        </x-table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @forelse ($familyMember as $familyinfo)
                        <x-table.row wire:loading.class="opacity-50">
                            <x-table.cell class="cell">
                                {{ $familyinfo->first_name }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $familyinfo->middle_name }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $familyinfo->last_name }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $familyinfo->relation }}
                            </x-table.cell>
                            <x-table.cell class="cell">
                                {{ $familyinfo->applicantInfo->first_name }}
                            </x-table.cell>

                            <x-table.cell class="cell">
                                {{ $familyinfo->created_at->format('F j, Y h:i:s A') }}
                            </x-table.cell>

                        </x-table.row>
                        @empty
                        <td class="py-6" colspan="5">
                            <div class="flex flex-col justify-center place-items-center align-center">
                                <img class="w-24 h-24" src="{{ asset('images/empty.svg') }}" alt="Empty" />
                                <div class="">
                                    <p class="mt-5 text-gray-500">
                                        No data available ...
                                    </p>
                                </div>
                            </div>
                        </td>
                        @endforelse
                    </x-slot>
                </x-table>
                <div class="mt-5 mb-5">
                    {{ $familyMember->onEachSide(0)->links() }}
                </div>
            </div>

            @endif

            @if ($counter == 2)
            <p class="text-base font-medium">Basic Info</p>
            <div class="grid grid-cols-3 gap-6 ">
                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="first_name" name="first_name" class="block w-full border-2 "
                            wire:model.debounce="applicant_info.first_name" required />
                        <x-floating-label for="first_name" :value="__('First Name')" />
                    </div>
                    @error('applicant_info.first_name')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="middle_name" name="middle_name" :value="old('middle_name')"
                            wire:model.debounce="applicant_info.middle_name" />
                        <x-floating-label for="middle_name" :value="__('Middle Name')" />
                    </div>
                    @error('applicant_info.middle_name')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="last_name" name="last_name" :value="old('last_name')"
                            wire:model.debounce="applicant_info.last_name" required />
                        <x-floating-label for="last_name" :value="__('Last Name')" />
                    </div>
                    @error('applicant_info.last_name')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="suffix" :value="old('suffix')" name="suffix"
                            wire:model.debounce="applicant_info.suffix" />
                        <x-floating-label for="suffix" :value="__('Suffix')" />
                    </div>
                    @error('applicant_info.suffix')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>



                <div class="mt-4">
                    <div class="relative">

                        <x-floating-input datepicker type="date" id="birth_date" name="birth_date"
                            :value="old('birth_date')" required wire:model.debounce="applicant_info.birth_date" />
                        <x-floating-label for="birth_date" :value="__('Birthday')" />
                    </div>
                    @error('applicant_info.birth_date')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="place_of_birth" name="place_of_birth"
                            :value="old('place_of_birth')" required
                            wire:model.debounce="applicant_info.place_of_birth" />
                        <x-floating-label for="place_of_birth" :value="__('Place of Birth')" />
                    </div>
                    @error('applicant_info.place_of_birth')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <select wire:model.debounce="applicant_info.civil_status" name="civil_status" id="civil_status"
                        class="'block p-3 w-full text-sm
                    text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                    dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option value="" selected>
                            --Civil Status
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
                    @error('applicant_info.civil_status')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>



                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="citizenship" name="citizenship" :value="old('citizenship')"
                            required wire:model.debounce="applicant_info.citizenship" />
                        <x-floating-label for="citizenship" :value="__('Citizenship')" />
                    </div>
                    @error('applicant_info.citizenship')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="applicant_info.brgy_origin" type="text" id="brgy_origin"
                            name="brgy_origin" :value="old('brgy_origin')" required />
                        <x-floating-label for="brgy_origin" :value="__('Residence/Address')" />
                    </div>
                    @error('applicant_info.brgy_origin')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="applicant_info.contact" type="text" id="contact"
                            name="contact" :value="old('contact')" required />
                        <x-floating-label for="contact" :value="__('Contact')" />
                    </div>
                    @error('applicant_info.contact')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="applicant_info.office" type="text" id="office"
                            name="office" :value="old('office')" required />
                        <x-floating-label for="office" :value="__('Office')" />
                    </div>
                    @error('applicant_info.office')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="applicant_info.tin_no" type="text" id="tin_no"
                            name="tin_no" :value="old('tin_no')" required />
                        <x-floating-label for="tin_no" :value="__('TIN No.')" />
                    </div>
                    @error('applicant_info.tin_no')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="applicant_info.govt_id" type="text" id="govt_id"
                            name="govt_id" :value="old('govt_id')" required />
                        <x-floating-label for="govt_id" :value="__('GSIS/SSS/Pag-ibig No.')" />
                    </div>
                    @error('applicant_info.govt_id')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>


                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="applicant_info.income_per_month" type="text"
                            id="income_per_month" name="income_per_month" :value="old('income_per_month')" required />
                        <x-floating-label for="income_per_month" :value="__('Income per Month')" />
                    </div>
                    @error('applicant_info.income_per_month')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>
            </div>
            @endif

            @if ($counter == 3)
            <p class="mt-5 text-base font-medium">Spouse Info</p>
            <div class="grid grid-cols-3 gap-6 ">
                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="spouse_info.spouse_first_name" type="text"
                            id="spouse_info.spouse_first_name" name="spouse_info.spouse_first_name"
                            :value="old('spouse_info.spouse_first_name')" class="block w-full border-2 " required />
                        <x-floating-label for="spouse_info.spouse_first_name" :value="__('Spouse First Name')" />
                    </div>
                    @error('spouse_info.spouse_first_name')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="spouse_info.spouse_middle_name" type="text"
                            id="spouse_info.spouse_middle_name" name="spouse_info.spouse_middle_name"
                            :value="old('spouse_info.spouse_middle_name')" />
                        <x-floating-label for="spouse_info.spouse_middle_name" :value="__('Spouse Middle Name')" />
                    </div>
                    @error('spouse_info.spouse_middle_name')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="spouse_info.spouse_last_name" type="text"
                            id="spouse_info.spouse_last_name" name="spouse_info.spouse_last_name"
                            :value="old('spouse_info.spouse_last_name')" required />
                        <x-floating-label for="spouse_info.spouse_last_name" :value="__('Spouse Last Name')" />
                    </div>
                    @error('spouse_info.spouse_last_name')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="spouse_info.spouse_birth_date" type="date"
                            id="spouse_info.spouse_birth_date" name="spouse_info.spouse_birth_date"
                            :value="old('spouse_info.spouse_birth_date')" required />
                        <x-floating-label for="spouse_info.spouse_birth_date" :value="__('Birthday')" />
                    </div>
                    @error('spouse_info.spouse_birth_date')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="spouse_info.spouse_place_of_birth" type="text"
                            id="spouse_info.spouse_place_of_birth" name="spouse_info.spouse_place_of_birth"
                            :value="old('spouse_info.spouse_place_of_birth')" required />
                        <x-floating-label for="spouse_info.spouse_place_of_birth" :value="__('Place of Birth')" />
                    </div>
                    @error('spouse_info.spouse_place_of_birth')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>
            </div>

            <p class="mt-5 text-base font-medium">Family Composition</p>
            <div class="pb-5 border-b border-gray-200">
                @foreach ($familyCompositions as $index => $familyComposition)
                <div class="border-b-2 pb-5">
                    <div class="grid grid-cols-3 gap-6 ">
                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input wire:model.debounce="familyCompositions.{{$index}}.first_name"
                                    type="text" id="familyCompositions.{{$index}}.first_name"
                                    name="familyCompositions.{{$index}}.first_name" class="block w-full border-2 "
                                    required />
                                <x-floating-label for="familyCompositions.{{$index}}.first_name"
                                    :value="__('First Name')" />
                            </div>
                            @error('familyCompositions.{{$index}}.first_name')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input wire:model.debounce="familyCompositions.{{$index}}.middle_name"
                                    type="text" id="familyCompositions.{{$index}}.middle_name"
                                    name="familyCompositions.{{$index}}.middle_name" class="block w-full border-2 "
                                    required />
                                <x-floating-label for="familyCompositions.{{$index}}.middle_name"
                                    :value="__('Middle Name')" />
                            </div>
                            @error('familyCompositions.{{$index}}.middle_name')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input wire:model.debounce="familyCompositions.{{$index}}.last_name"
                                    type="text" id="familyCompositions.{{$index}}.last_name"
                                    name="familyCompositions.{{$index}}.last_name" class="block w-full border-2 "
                                    required />
                                <x-floating-label for="familyCompositions.{{$index}}.last_name"
                                    :value="__('Last Name')" />
                            </div>
                            @error('familyCompositions.{{$index}}.last_name')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input wire:model.debounce="familyCompositions.{{$index}}.relation"
                                    type="text" id="familyCompositions.{{$index}}.relation"
                                    name="familyCompositions.{{$index}}.relation" class="block w-full border-2 "
                                    required />
                                <x-floating-label for="familyCompositions.{{$index}}.relation"
                                    :value="__('Relation')" />
                            </div>
                            @error('familyCompositions.{{$index}}.relation')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>


                        <div class="mt-4">

                            <select wire:model.debounce="familyCompositions.{{$index}}.civil_status"
                                name="familyCompositions.{{$index}}.civil_status"
                                id="familyCompositions.{{$index}}.civil_status" class="'block p-3 w-full text-sm
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
                            @error('familyCompositions.{{$index}}.civil_status')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>



                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input wire:model.debounce="familyCompositions.{{$index}}.age" type="text"
                                    id="familyCompositions.{{$index}}.age" name="familyCompositions.{{$index}}.age"
                                    class="block w-full border-2 " required />
                                <x-floating-label for="familyCompositions.{{$index}}.age" :value="__('Age')" />
                            </div>
                            @error('familyCompositions.{{$index}}.age')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input wire:model.debounce="familyCompositions.{{$index}}.source_of_income"
                                    type="text" id="familyCompositions.{{$index}}.source_of_income"
                                    name="familyCompositions.{{$index}}.source_of_income" class="block w-full border-2 "
                                    required />
                                <x-floating-label for="familyCompositions.{{$index}}.source_of_income"
                                    :value="__('Source of Income')" />
                            </div>
                            @error('familyCompositions.{{$index}}.source_of_income')
                            <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
                @endforeach

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
            @endif

            @if ($counter == 4)
            <p class="text-base font-medium">Housing Project</p>
            <div class="grid grid-cols-4 gap-6 mb-5">

                <div class="mt-4">
                    <select wire:model.debounce="housing_info.housing_project_id" name="housing_project_id"
                        id="housing_project_id" class="'block p-3 w-full text-sm
                    text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                    dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option value="" selected>
                            --Select Housing Project--

                        </option>
                        @foreach ($housing_projects as $housing)
                        <option value="{{ $housing->id }}">
                            {{ $housing->project }}
                        </option>
                        @endforeach
                    </select>
                </div>
                @error('housing_info.housing_project_id')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                    $message
                    }}</p>
                @enderror

                <div class="mt-4">
                    <select wire:model.debounce="housing_info.block" name="block_no" id="block_no" class="'block p-3 w-full text-sm
                text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option value="" selected>
                            --Select Housing Block--
                        </option>
                        @foreach ($blocks as $block)
                        <option value="{{ $block->block_no }}">
                            {{ $block->block_no }}
                        </option>
                        @endforeach
                    </select>
                </div>
                @error('housing_info.block')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                    $message
                    }}</p>
                @enderror

                <div class="mt-4">
                    <select wire:model.debounce="housing_info.lot" name="lot_no" id="lot_no" class="'block p-3 w-full text-sm
                text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option value="" selected>
                            --Select Housing Lot--
                        </option>
                        @foreach ($lots as $lot)
                        <option value="{{ $lot->lot_no }}">
                            {{ $lot->lot_no }}
                        </option>
                        @endforeach
                    </select>
                </div>
                @error('housing_info.lot')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                    $message
                    }}</p>
                @enderror


                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input wire:model.debounce="housing_info.phase" type="text" id="phase_no"
                            name="phase_no" class="block w-full border-2 " required />
                        <x-floating-label for="phase_no" :value="__('Phase No.')" />
                    </div>
                    @error('phase_no')
                    <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                        $message
                        }}</p>
                    @enderror
                </div>
                @error('housing_info.phase')
                <p id="outlined_error_help" class="mt-2 text-left text-xs text-red-600 dark:text-red-400">{{
                    $message
                    }}</p>
                @enderror
            </div>

            <p class="text-base font-medium">Requirements</p>
            <div class="grid grid-cols-4 gap-6 mb-5">
                @foreach ($requirements as $requirement)
                <div class="flex items-center mt-1">
                    <input wire:model.debounce="selectedRequirements" id="checkbox-{{ $requirement->id }}"
                        name="requirements" type="checkbox" value="{{ $requirement->id }}"
                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-{{ $requirement->id }}"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        {{ $requirement->description }}
                    </label>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        @if ($counter == 5)
        <p class="my-5 text-black font-medium text-lg">Applicant Information</p>
        <div class="grid grid-cols-3 gap-6 mx-auto">
            <div class="text-base font-medium text-cool-gray-600">
                First Name:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['first_name'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Middle Name:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['middle_name'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Last Name:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['last_name'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Suffix:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['suffix'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Address/Residence:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['brgy_origin'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Birthday:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['birth_date'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Place of Birth:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['place_of_birth'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Citizenship:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['citizenship'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Civil Status:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['civil_status'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Contact:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['contact'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Office:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['office'] ?? '' }}
                </p>
            </div>
            <div class="text-base font-medium text-cool-gray-600">
                Tin Number:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['tin_no'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                GSIS/SSS/Pag-ibig No.:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['govt_id'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Income per Month:
                <p class=" text-black font-medium text-lg">
                    {{ $applicant_info['income_per_month'] ?? '' }}
                </p>
            </div>

        </div>

        <p class="border-b-2 my-5"></p>

        <p class="my-5 text-black font-medium text-lg">Spouse Information</p>
        <div class="grid grid-cols-3 gap-6 mx-auto">
            <div class="text-base font-medium text-cool-gray-600">
                First Name:
                <p class=" text-black font-medium text-lg">
                    {{ $spouse_info['spouse_first_name'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Middle Name:
                <p class=" text-black font-medium text-lg">
                    {{ $spouse_info['spouse_middle_name'] ?? '' }}

                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Last Name:
                <p class=" text-black font-medium text-lg">
                    {{ $spouse_info['spouse_last_name'] ?? '' }}
                </p>
            </div>


            <div class="text-base font-medium text-cool-gray-600">
                Birthday:
                <p class=" text-black font-medium text-lg">
                    {{ $spouse_info['spouse_birth_date'] ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Place of Birth:
                <p class=" text-black font-medium text-lg">
                    {{ $spouse_info['spouse_place_of_birth'] ?? '' }}
                </p>
            </div>
        </div>

        <p class="border-b-2 my-5"></p>

        <div class="mt-5">
            <p class="font-medium text-base my-5">Family Composition</p>
            <x-table>
                <x-slot name="head">
                    <x-table.heading sortable multi-column wire:click="sortBy('first_name')"
                        :direction="$sorts['first_name'] ?? null">
                        Name
                    </x-table.heading>

                    <x-table.heading sortable multi-column wire:click="sortBy('relation')"
                        :direction="$sorts['relation'] ?? null">
                        Relation
                    </x-table.heading>

                    <x-table.heading sortable multi-column wire:click="sortBy('civil_status')"
                        :direction="$sorts['civil_status'] ?? null">
                        Civil Status
                    </x-table.heading>

                    <x-table.heading sortable multi-column wire:click="sortBy('age')"
                        :direction="$sorts['age'] ?? null">
                        Age
                    </x-table.heading>

                    <x-table.heading sortable multi-column wire:click="sortBy('source_of_income')"
                        :direction="$sorts['source_of_income'] ?? null">
                        Source of Income
                    </x-table.heading>

                </x-slot>
                <x-slot name="body">
                    @forelse ($familyCompositions as $family)
                    <x-table.row wire:loading.class="opacity-50">
                        <x-table.cell class="cell">
                            {{ $family['first_name'] }}
                        </x-table.cell>

                        <x-table.cell class="cell">
                            {{ $family['relation'] }}
                        </x-table.cell>

                        <x-table.cell class="cell">
                            {{ $family['civil_status'] }}
                        </x-table.cell>

                        <x-table.cell class="cell">
                            {{ $family['age'] }}
                        </x-table.cell>

                        <x-table.cell class="cell">
                            {{ $family['source_of_income'] }}
                        </x-table.cell>

                    </x-table.row>
                    @empty
                    <td class="py-6" colspan="5">
                        <div class="flex flex-col justify-center place-items-center align-center">
                            <img class="w-24 h-24" src="{{ asset('images/empty.svg') }}" alt="Empty" />
                            <div class="">
                                <p class="mt-5 text-gray-500">
                                    No data available ...
                                </p>
                            </div>
                        </div>
                    </td>
                    @endforelse
                </x-slot>
            </x-table>
        </div>


        <p class="my-5 text-black font-medium text-lg">Housing Project and Requirements</p>
        <div class="grid grid-cols-4 gap-6 mx-auto">
            <div class="text-base font-medium text-cool-gray-600">
                Housing Project:
                <p class=" text-black font-medium text-lg">
                    {{ $housingProjectHandler->project ?? '' }}
                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Block:
                <p class=" text-black font-medium text-lg">
                    {{ $housing_info['block'] ?? '' }}

                </p>
            </div>

            <div class="text-base font-medium text-cool-gray-600">
                Lot:
                <p class=" text-black font-medium text-lg">
                    {{ $housing_info['lot'] ?? '' }}
                </p>
            </div>


            <div class="text-base font-medium text-cool-gray-600">
                Phase:
                <p class=" text-black font-medium text-lg">
                    {{ $housing_info['phase'] ?? '' }}
                </p>
            </div>
        </div>
        <div class="mb-5">
            @foreach ($requirementsHandler as $requirement)
            <div class="text-sm
            bg-transparent mt-5">
                <li class=" text-cool-gray-900">
                    {{ $requirement->description ?? '' }}
                </li>
            </div>


            @endforeach
        </div>
        @endif

        <div class="flex justify-end gap-2">
            <div class="flex justify-end mt-5">
                @if ($counter > 1)
                <x-button.text-button btnType="error" wire:click="previous">Back</x-button.text-button>
                @endif

                @if ($counter == 5)
                <x-button.text-button btnType="success" wire:click="saveApplicant">Save New Applicant
                </x-button.text-button>
                @endif

                @if ($counter < 5) <x-button.text-button wire:click='next'>Next
                    </x-button.text-button>
                    @endif
            </div>

        </div>
    </div>


</div>
</div>
