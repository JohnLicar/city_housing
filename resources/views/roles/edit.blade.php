<x-app-layout>
  <div class="my-6 text-2xl font-semibold text-gray-700 mt-28">
    <p class="text-2xl leading-8">
      Update Roles Permission
    </p>
  </div>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <x-auth-validation-errors />
        <div class="p-6 bg-white border-b border-gray-200">

          <form method="POST" action="{{  route('roles.update', $role) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3 sm:grid-cols-1">
              <div>
                <x-label for="role" :value="__('Role')" />
                <x-input id="role" class="block mt-1 w-full" type="text" name="role" value="{{ $role->name }}"
                  autofocus />
              </div>
              @foreach ($role->permissions as $permission )
              <div>

                <x-label for="permission" :value="__('Permission')" />
                <input id="inline-checkbox" type="checkbox" name="permission[]" value="{{  $permission->name }}"
                  class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">


              </div>
              @endforeach
              @livewire('multi-select')
            </div>
            <div class="flex items-center justify-end mt-4">
              <x-back-button href="{{ route('roles.index') }}" class="ml-3">
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