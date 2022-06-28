<x-app-layout>
  <div class="mt-20">
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