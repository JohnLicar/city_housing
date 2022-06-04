<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create New User') }}
    </h2>
  </x-slot>

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
              <div class="grid grid-cols-3 gap-6 ">

                <div>
                  <x-label for="first_name" :value="__('First Name')" />
                  <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                    :value="old('first_name')" autofocus />
                </div>

                <div>
                  <x-label for="middle_name" :value="__('Middle Name')" />
                  <x-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name"
                    :value="old('middle_name')" />
                </div>

                <div>
                  <x-label for="last_name" :value="__('Last Name')" />
                  <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                    :value="old('last_name')" />
                </div>

                <div>
                  <x-label for="brgy_origin" :value="__('Barangay Origin')" />
                  <x-input id="brgy_origin" class="block mt-1 w-full" type="text" name="brgy_origin"
                    :value="old('brgy_origin')" />
                </div>

                <div>
                  <x-label for="birth_date" :value="__('Birthdate')" />
                  <x-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date"
                    :value="old('birth_date')" />
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
                  <x-label for="office" :value="__('Office')" />
                  <x-input id="office" class="block mt-1 w-full" type="text" name="office" :value="old('office')" />
                </div>

                <div>
                  <x-label for="income_per_month" :value="__('Income Per Month')" />
                  <x-input id="income_per_month" class="block mt-1 w-full" type="text" name="income_per_month"
                    :value="old('income_per_month')" />
                </div>
              </div>
            </div>

            {{-- Split --}}
            <h2 class="my-6  text-2xl font-semibold text-gray-700">
              Family Composition
            </h2>
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