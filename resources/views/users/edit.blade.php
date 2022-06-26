<x-app-layout>
  <div class="my-6 text-2xl font-semibold text-gray-700 mt-32">
    <p class="text-2xl leading-8">
      Update Accounts
    </p>
  </div>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <x-auth-validation-errors />
        <div class="p-6 bg-white border-b border-gray-200">

          <form method="POST" action="{{  route('users.update', $user) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3 sm:grid-cols-1">

              <div>
                <x-label for="first_name" :value="__('First Name')" />
                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                  value="{{ $user->first_name }}" autofocus />
              </div>

              <div>
                <x-label for="middle_name" :value="__('Middle Name')" />
                <x-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name"
                  value="{{ $user->middle_name }}" />
              </div>

              <div>
                <x-label for="last_name" :value="__('Last Name')" />
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                  value="{{ $user->last_name }}" />
              </div>

              <div>
                <x-label for="gender" :value="__('Gender')" />
                <select name="gender" id="gender" class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                  focus:ring-indigo-200 focus:ring-opacity-50">
                  <option value="Male" @if ($user->gender === 'Male' )
                    selected @endif>
                    Male
                  </option>

                  <option value="Female" @if ($user->gender === 'Female' )
                    selected @endif>
                    Female
                  </option>

                  <option value="Others" @if ($user->gender === 'Others' )
                    selected @endif>
                    Others
                  </option>
                </select>
              </div>


              <div>
                <x-label for="contact" :value="__('Contact Number')" />
                <x-input id="contact" class="block mt-1 w-full" type="text" name="contact"
                  value="{{ $user->contact }}" />
              </div>


              <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" />
              </div>


              <div>
                <x-label for="contact" :value="__('Address')" />
                {{-- <textarea type="text" name="address" id="address" rows="3"
                  class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"
                  cols="50"></textarea> --}}

                <x-input id="address" class="block mt-1 w-full" type="text" name="address"
                  value="{{ $user->address }}" />
              </div>

              <div>
                <x-label for="role" :value="__('Role')" />
                <select name="role" id="role" class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                  focus:ring-indigo-200 focus:ring-opacity-50">
                  @foreach ($roles as $role)
                  <option value="{{ $role->name }}" @if ($user->roles[0]->name === $role->name )
                    selected @endif>
                    {{ $role->name }}
                  </option>
                  @endforeach
                </select>
              </div>

              <div>
                <x-label for="approve" :value="__('Approve')" />
                <select name="approve" id="approve" class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                  focus:ring-indigo-200 focus:ring-opacity-50">
                  <option value="1" @if ($user->approve === 1 )
                    selected @endif>
                    Approve
                  </option>

                  <option value="0" @if ($user->approve === 0 )
                    selected @endif>
                    Pending
                  </option>
                </select>
              </div>

            </div>
            <div class="flex items-center justify-end mt-4">
              <x-back-button href="{{ route('users.index') }}" class="ml-3">
                {{ __('Back') }}
              </x-back-button>
              <x-button class="ml-3">
                {{ __('Update') }}
              </x-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>