<x-app-layout>
  <div class="flex flex-row sm:flex-col gap-2 my-6 pt-12">
    <div class="flex items-center p-4 w-2/5 sm:w-full bg-blue-1000 rounded-lg shadow-xs text-white">
      <div class=" text-base">
        <div class="ml-3 font-medium leading-5">
          Pending Users
        </div>
        <div class="text-9xl mx-auto">
          {{-- {{ $pendingUsers }} --}}
        </div>
      </div>
    </div>

    <div class="flex items-center p-4 bg-red-1000 sm:w-full w-2/5 rounded-lg shadow-xs text-white">
      <div class=" text-base">
        <div class="ml-3 font-medium leading-5">
          Trashed Users
        </div>
        <div class="text-9xl">
          {{-- {{ $trashedUsers }} --}}
        </div>
      </div>
    </div>

    <div class="flex items-center p-4 w-2/5 bg-green-1000 sm:w-full rounded-lg shadow-xs text-white">
      <div class="flex items-center px-3">

        <div class=" text-base">
          <div class="ml-3 font-medium leading-5">
            Total Users
          </div>
          <div class="text-9xl">
            {{-- {{ $totalUsers }} --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-14">
    <div class="mt-4 bg-white rounded-lg shadow-xs">
      <div class="my-6 text-2xl font-semibold text-gray-700 mt-14">
        <p class="text-2xl leading-8">
          Account Logs
        </p>
        <p class="text-base font-normal">Here are the activities of your account</p>
        </p>
      </div>
      @livewire('account-logs.account-table-logs')
    </div>
  </div>
</x-app-layout>