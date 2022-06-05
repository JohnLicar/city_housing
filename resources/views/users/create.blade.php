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
        <div class="p-6 bg-white border-b border-gray-200">

          <form method="POST" action="{{  route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-3 gap-6">
              <div>
                <div class="relative">
                  <x-floating-input type="text" name="first_name" id="first_name" :value="old('first_name')" />
                  <x-floating-label for="first_name" :value="__('First Name')" />
                </div>
              </div>

              <div>
                <div class="relative">
                  <x-floating-input type="text" name="middle_name" id="middle_name" :value="old('middle_name')" />
                  <x-floating-label for="middle_name" :value="__('Middle Name')" />
                </div>
              </div>

              <div>
                <div class="relative">
                  <x-floating-input type="text" name="last_name" id="last_name" :value="old('last_name')" />
                  <x-floating-label for="last_name" :value="__('Last Name')" />
                </div>
              </div>

              <div>

                <select name="gender" id="gender" class="block px-2.5 pb-2.5 pt-4 w-full text-sm
                text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">

                  <option value="">
                    --Choose Gender--
                  </option>
                  <option value="Male">
                    Male
                  </option>

                  <option value="Female">
                    Female
                  </option>

                  <option value="Others">
                    Others
                  </option>
                </select>
              </div>

              <div>
                <div class="relative">
                  <x-floating-input type="text" name="contact" id="contact" :value="old('contact')" />
                  <x-floating-label for="contact" :value="__('Contact Number')" />
                </div>
              </div>


              <div>
                <div class="relative">
                  <x-floating-input type="text" name="email" id="email" :value="old('email')" />
                  <x-floating-label for="email" :value="__('Email')" />
                </div>
              </div>

              <div>

                <div class="relative">
                  <x-floating-input type="text" name="address" id="address" :value="old('address')" />
                  <x-floating-label for="address" :value="__('Address')" />
                </div>
              </div>

              <div>

                <select name="role" id="role" class="block px-2.5 pb-2.5 pt-4 w-full text-sm
                text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                  <option value="">
                    --Choose Role--
                  </option>
                  @foreach ($roles as $role)
                  <option value="{{ $role->name }}">
                    {{ $role->name }}
                  </option>
                  @endforeach
                </select>
              </div>



            </div>
            <div class="flex items-center justify-end mt-4">
              <x-back-button href="{{ route('users.index') }}" class="ml-3">
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