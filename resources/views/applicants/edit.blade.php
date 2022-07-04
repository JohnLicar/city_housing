<x-app-layout>
    <div class="py-5">
        <div class="pb-5 my-6 mt-16 text-2xl font-semibold text-gray-700 border-b-2">
            <p class="text-2xl leading-8">
                {{ __('Applicant Personal Information' ) }}
            </p>
            <p class="text-base font-normal">Please make sure that your entered informations are correct.</p>
        </div>
        {{ $errors }}
        <form method="POST" action="{{  route('applicants.update', $applicant) }}">
            @method('PUT')
            @csrf
            <div class="mt-5">
                <p class="text-base font-medium">Housing Project</p>
                <div class="grid grid-cols-4 gap-6 mb-5">
                    <div class="mt-4">
                        <div class="relative">
                            <x-floating-input type="text" id="phase_no" name="phase_no"
                                class="block w-full border-2 " />
                            <x-floating-label for="phase_no" :value="__('Phase No.')" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="relative">
                            <x-floating-input type="text" id="block_no" name="block_no"
                                class="block w-full border-2 " />
                            <x-floating-label for="block_no" :value="__('Block No.')" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="relative">
                            <x-floating-input type="text" id="lot_no" name="lot_no" class="block w-full border-2 " />
                            <x-floating-label for="lot_no" :value="__('Lot No.')" />
                        </div>
                    </div>
                    <div class="mt-4">

                        <select name="housing_project_id" id="housing_project_id" class="'block p-3 w-full text-sm
                    text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                    dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            @foreach ($housing_projects as $housing)
                            <option value="{{ $housing->id }}" @if ($applicant->housing_project_id == $housing->id)
                                selected
                                @endif>
                                {{ $housing->project }}
                            </option>
                            @endforeach
                        </select>

                    </div>

                </div>
            </div>

            <div class="mt-5">
                <p class="text-lg font-medium">Applicant Basic Info</p>

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
                            <x-floating-input type="text" id="suffix" name="suffix"
                                value="{{ $applicant->info->suffix }}" class="block w-full " />
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
                            <x-floating-input type="text" id="tin_no" name="tin_no"
                                value="{{ $applicant->info->tin_no }}" class="block w-full " />
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
                            <x-floating-input type="text" id="office" name="office"
                                value="{{ $applicant->info->office }}" class="block w-full " />
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
                <p class="text-lg font-medium">Applicant Spouse Info</p>

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
                <p class="my-5 text-base font-medium">Family Composition</p>
                @foreach ($applicant->family_composition as $index => $familyComposition)
                <div class="pb-5 border-b-2">
                    <div class="grid grid-cols-3 gap-6 ">
                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input value="{{ $familyComposition->first_name }}" type="text"
                                    id="familyCompositions[{{ $index }}][first_name]"
                                    name="familyCompositions[{{ $index }}][first_name]" class="block w-full border-2 "
                                    required />
                                <x-floating-label for="familyCompositions[{{ $index }}][first_name]"
                                    :value="__('First Name')" />
                            </div>
                            @error('familyCompositions[{{ $index }}][first_name]')
                            <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input value="{{ $familyComposition->middle_name }}" type="text"
                                    id="familyCompositions[{{ $index }}][middle_name]"
                                    name="familyCompositions[{{ $index }}][middle_name]" class="block w-full border-2 "
                                    required />
                                <x-floating-label for="familyCompositions[{{ $index }}][middle_name]"
                                    :value="__('Middle Name')" />
                            </div>
                            @error('familyCompositions[{{ $index }}][middle_name]')
                            <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input value="{{ $familyComposition->last_name }}" type="text"
                                    id="familyCompositions[{{ $index }}][last_name]"
                                    name="familyCompositions[{{ $index }}][last_name]" class="block w-full border-2 "
                                    required />
                                <x-floating-label for="familyCompositions[{{ $index }}][last_name]"
                                    :value="__('Last Name')" />
                            </div>
                            @error('familyCompositions[{{ $index }}][last_name]')
                            <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input value="{{ $familyComposition->relation }}" type="text"
                                    id="familyCompositions[{{ $index }}][relation]"
                                    name="familyCompositions[{{ $index }}][relation]" class="block w-full border-2 "
                                    required />
                                <x-floating-label for="familyCompositions[{{ $index }}][relation]"
                                    :value="__('Relation')" />
                            </div>
                            @error('familyCompositions[{{ $index }}][relation]')
                            <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">

                            <select name="familyCompositions[{{ $index }}][civil_status]"
                                id="familyCompositions[{{ $index }}][civil_status]" class="'block p-3 w-full text-sm
                text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option value="Single" @if ($familyComposition->civil_status==='Single' ) selected
                                    @endif>
                                    Single
                                </option>

                                <option value="Married" @if ($familyComposition->civil_status === 'Married' )
                                    selected @endif>
                                    Married
                                </option>

                                <option value="Widowed" @if ($familyComposition->civil_status==='Widowed' ) selected
                                    @endif>
                                    Widowed
                                </option>

                                <option value="Divorced" @if ($familyComposition->civil_status==='Divorced' ) selected
                                    @endif>
                                    Divorced
                                </option>

                            </select>
                        </div>

                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input value="{{ $familyComposition->age }}" type="text"
                                    id="familyCompositions[{{ $index }}][age]"
                                    name="familyCompositions[{{ $index }}][age]" class="block w-full border-2 "
                                    required />
                                <x-floating-label for="familyCompositions[{{ $index }}][age]" :value="__('Age')" />
                            </div>
                            @error('familyCompositions[{{ $index }}][age]')
                            <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <div class="relative">
                                <x-floating-input value="{{ $familyComposition->source_of_income }}" type="text"
                                    id="familyCompositions[{{ $index }}][source_of_income]"
                                    name="familyCompositions[{{ $index }}][source_of_income]"
                                    class="block w-full border-2 " required />
                                <x-floating-label for="familyCompositions[{{ $index }}][source_of_income]"
                                    :value="__('Source of Income')" />
                            </div>
                            @error('familyCompositions[{{ $index }}][source_of_income]')
                            <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                                $message
                                }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                @endforeach
                @livewire('applicants.add-family-composition')
            </div>


            <div class="mt-5">
                <p class="text-lg font-medium">Requirements</p>

                <div class="grid grid-cols-4 gap-6 mb-5">
                    @foreach ($applicant->requirements as $requirement)
                    <div class="mt-5 text-sm bg-transparent">
                        <li class=" text-cool-gray-900">
                            {{ $requirement->description ?? '' }}
                        </li>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="flex justify-end gap-2">
                <div class="flex justify-end mt-5">

                    <div class="flex items-center justify-end mt-4">
                        <x-back-button href="{{ route('applicants.index') }}" class="ml-3">
                            {{ __('Back') }}
                        </x-back-button>
                        <x-button type="submit" class="ml-3">
                            {{ __('Create') }}
                        </x-button>
                    </div>

                </div>

            </div>
        </form>
    </div>
</x-app-layout>