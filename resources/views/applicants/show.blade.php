<x-app-layout>
    <div class="py-5">
        <div class="my-6 pb-5 text-2xl font-semibold text-gray-700 border-b-2 mt-16">
            <p class="text-2xl leading-8">
                {{ __('Applicant Personal Information' ) }}
            </p>
            <p class="text-base font-normal">Please make sure that your entered informations are correct.</p>
        </div>

        <div class="mt-5">
            <p class="font-medium text-base">Housing Project</p>
            <div class="grid grid-cols-4 gap-6 mb-5">
                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="phase_no" name="phase_no" class="block w-full border-2 "
                            required />
                        <x-floating-label for="phase_no" :value="__('Phase No.')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="block_no" name="block_no" class="block w-full border-2 "
                            required />
                        <x-floating-label for="block_no" :value="__('Block No.')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="lot_no" name="lot_no" class="block w-full border-2 "
                            required />
                        <x-floating-label for="lot_no" :value="__('Lot No.')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="Housing Project" name="Housing Project"
                            value="{{ $applicant->housing_project->project }}" class="block w-full " />
                        <x-floating-label for="Housing Project" :value="__('Housing Project')" />
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-5">
            <p class="font-medium text-lg">Applicant Basic Info</p>

            <div class="grid grid-cols-3 gap-2">
                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="first_name" name="first_name"
                            value="{{ $applicant->info->first_name }}" class="block w-full " />
                        <x-floating-label for="first_name" :value="__('First Name')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="middle_name" name="middle_name"
                            value="{{ $applicant->info->middle_name }}" class="block w-full " />
                        <x-floating-label for="middle_name" :value="__('Middle Name')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="last_name" name="last_name"
                            value="{{ $applicant->info->last_name }}" class="block w-full " />
                        <x-floating-label for="last_name" :value="__('Last Name')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="suffix" name="suffix" value="{{ $applicant->info->suffix }}"
                            class="block w-full " />
                        <x-floating-label for="suffix" :value="__('Suffix')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="brgy_origin" name="brgy_origin"
                            value="{{ $applicant->info->brgy_origin }}" class="block w-full " />
                        <x-floating-label for="brgy_origin" :value="__('Residence/Address')" />
                    </div>
                </div>


                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="birth_date" name="birth_date"
                            value="{{ $applicant->info->birth_date }}" class="block w-full " />
                        <x-floating-label for="birth_date" :value="__('Birthday')" />
                    </div>
                </div>


                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="place_of_birth" name="place_of_birth"
                            value="{{ $applicant->info->place_of_birth }}" class="block w-full " />
                        <x-floating-label for="place_of_birth" :value="__('Place of Birth')" />
                    </div>
                </div>


                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="citizenship" name="citizenship"
                            value="{{ $applicant->info->citizenship }}" class="block w-full " />
                        <x-floating-label for="citizenship" :value="__('Citizenship')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="contact" name="contact"
                            value="{{ $applicant->info->contact }}" class="block w-full " />
                        <x-floating-label for="contact" :value="__('Contact')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="tin_no" name="tin_no" value="{{ $applicant->info->tin_no }}"
                            class="block w-full " />
                        <x-floating-label for="tin_no" :value="__('TIN no')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="govt_id" name="govt_id"
                            value="{{ $applicant->info->govt_id }}" class="block w-full " />
                        <x-floating-label for="govt_id" :value="__('GSIS/SSS/Pag-IBIG No')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="civil_status" name="civil_status"
                            value="{{ $applicant->info->civil_status }}" class="block w-full " />
                        <x-floating-label for="civil_status" :value="__('Civil Status')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="office" name="office" value="{{ $applicant->info->office }}"
                            class="block w-full " />
                        <x-floating-label for="office" :value="__('Office')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="income_per_month" name="income_per_month"
                            value="{{ $applicant->info->income_per_month }}" class="block w-full " />
                        <x-floating-label for="income_per_month" :value="__('Income per Month')" />
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <p class="font-medium text-lg">Applicant Spouse Info</p>

            <div class="grid grid-cols-3 gap-2">
                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="spouse_first_name" name="spouse_first_name"
                            value="{{ $applicant->spouse->spouse_first_name }}" class="block w-full " />
                        <x-floating-label for="spouse_first_name" :value="__('First Name')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="spouse_middle_name" name="spouse_middle_name"
                            value="{{ $applicant->spouse->spouse_middle_name }}" class="block w-full " />
                        <x-floating-label for="spouse_middle_name" :value="__('Middle Name')" />
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="spouse_last_name" name="spouse_last_name"
                            value="{{ $applicant->spouse->spouse_last_name }}" class="block w-full " />
                        <x-floating-label for="spouse_last_name" :value="__('Last Name')" />
                    </div>
                </div>


                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="spouse_birth_date" name="spouse_birth_date"
                            value="{{ $applicant->spouse->spouse_birth_date }}" class="block w-full " />
                        <x-floating-label for="spouse_birth_date" :value="__('Birthday')" />
                    </div>
                </div>


                <div class="mt-4">
                    <div class="relative">
                        <x-floating-input type="text" id="spouse_place_of_birth" name="spouse_place_of_birth"
                            value="{{ $applicant->spouse->spouse_place_of_birth }}" class="block w-full " />
                        <x-floating-label for="spouse_place_of_birth" :value="__('Place of Birth')" />
                    </div>
                </div>
            </div>
        </div>

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
                    @forelse ($applicant->family_composition as $family)
                    <x-table.row wire:loading.class="opacity-50">
                        <x-table.cell class="cell">
                            {{ $family->full_name }}
                        </x-table.cell>

                        <x-table.cell class="cell">
                            {{ $family->relation }}
                        </x-table.cell>

                        <x-table.cell class="cell">
                            {{ $family->civil_status }}
                        </x-table.cell>

                        <x-table.cell class="cell">
                            {{ $family->age }}
                        </x-table.cell>

                        <x-table.cell class="cell">
                            {{ $family->source_of_income }}
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

    </div>
</x-app-layout>
