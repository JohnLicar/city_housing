<div class="mt-20">
 <div class="mt-4 bg-white rounded-lg shadow-xs">
     <div class="my-6 text-2xl font-semibold text-gray-700 mt-14">
         <p class="text-2xl leading-8">
             Housing Unit
         </p>
         <p class="text-base font-normal">Here are the housing unit that is available in the system</p>
         </p>
     </div>

     <div class="mt-16 mb-5">

         <div class="relative flex justify-end mb-5">
             <div class="absolute left-0">
                 <button
                     class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 border border-transparent rounded-lg bg-blue-1000 active:bg-blue-900 hover:bg-blue-700 focus:outline-none focus:ring"
                     wire:click='$emit("openModal", "housing-unit.create")'>
                     {{ __('New Housing Unit') }}
                 </button>
             </div>


             <x-button-dropdown.button-dropdown class="mr-2">
                 Filter Data
                 <x-slot name="content">
                     <div class="px-4 py-3 text-sm text-gray-900 bg-gray-100 dark:text-white">
                         <p class="text-base">Date Range</p>
                         <div class="font-medium truncate">Date from and to filter</div>
                     </div>
                     <x-button-dropdown.content>
                         <div class="flex items-center justify-center">
                             <div class="flex flex-col">
                                 <span>From</span>
                                 <input wire:model="start" id="datepicker" type="date"
                                     class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                     placeholder="Select date">
                             </div>
                             <div class="mx-2 mt-3.5">
                                 <span>to</span>
                             </div>
                             <div class="flex flex-col">
                                 <span>To</span>
                                 <input wire:model="end" id="datepicker" type="date"
                                     class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                     placeholder="Select date">
                             </div>
                         </div>

                         <div class="flex justify-end mt-5">
                             <x-button wire:click="resetFilter">Reset Filter</x-button>
                         </div>

                     </x-button-dropdown.content>
                 </x-slot>
             </x-button-dropdown.button-dropdown>

             <div class="relative w-1/3">
                 <x-floating-input wire:model.debounce.400ms="search" id="search" class="w-full" type="text"
                     name="search" :value="old('search')" />
                 <x-floating-label for="search" :value="__('Search')" />
             </div>
             <div class="absolute top-3 right-3">
                 <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                         d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                         clip-rule="evenodd"></path>
                 </svg>
             </div>
         </div>

         <div class="container overflow-x-auto">
             <x-table>
                 <x-slot name="head">
                     <x-table.heading sortable multi-column wire:click="sortBy('id')"
                         :direction="$sortField == 'id' ? $sortDirection : null">
                         ID
                     </x-table.heading>
                     <x-table.heading sortable multi-column wire:click="sortBy('housingproject.project')"
                         :direction="$sortField == 'housingproject.project' ? $sortDirection : null"> Project
                     </x-table.heading>
                     <x-table.heading sortable multi-column wire:click="sortBy('phase_no')"
                         :direction="$sortField == 'phase_no' ? $sortDirection : null">
                         Phase Number </x-table.heading>
                     <x-table.heading sortable multi-column wire:click="sortBy('block_no')"
                         :direction="$sortField == 'block_no' ? $sortDirection : null"> Block Number
                     </x-table.heading>
                     <x-table.heading sortable multi-column wire:click="sortBy('lot_no')"
                         :direction="$sortField == 'lot_no' ? $sortDirection : null"> Lot Number
                     </x-table.heading>
                     <x-table.heading sortable multi-column wire:click="sortBy('remark')"
                         :direction="$sortField == 'remark' ? $sortDirection : null">
                         Remark </x-table.heading>
                     <x-table.heading sortable multi-column wire:click="sortBy('action')"
                         :direction="$sortField == 'action' ? $sortDirection : null">
                         Action </x-table.heading>
                 </x-slot>
                 <x-slot name="body">
                     @forelse ($housingunits as $housingunit)
                     <x-table.row wire:loading.class="opacity-50" striped>
                         <x-table.cell class="cell">
                             {{ $housingunit->id }}
                         </x-table.cell>
                         <x-table.cell class="cell">
                             {{ $housingunit->housingproject->project }}
                         </x-table.cell>
                         <x-table.cell class="cell">
                             {{ $housingunit->phase_no }}
                         </x-table.cell>
                         <x-table.cell class="cell">
                             {{ $housingunit->block_no }}
                         </x-table.cell>
                         <x-table.cell class="cell">
                             {{ $housingunit->lot_no }}
                         </x-table.cell>
                         <x-table.cell class="cell">
                             {{ $housingunit->remark }}
                         </x-table.cell>

                         <x-table.cell class="cell">
                             <div class="flex gap-3 ">
                                 <div
                                     class="w-full font-medium transform text-blue-1000 hover:text-blue-900 hover:scale-110 ">
                                     <button wire:click='$emit("openModal", "user-detail-modal" , {{
                                         json_encode(["user" => $housingunit->id]) }})'>
                                         View Detail
                                     </button>
                                 </div>
                                 <div class="w-full font-medium transform hover:text-purple-500 hover:scale-110 ">

                                     <button wire:click='$emit("openModal", "user-modal.edit-user" , {{
                                         json_encode(["user" => $housingunit->id]) }})'>
                                         Edit
                                     </button>
                                 </div>

                                 <div class="w-full font-medium transform hover:text-purple-500 hover:scale-110 ">

                                     <button wire:click='$emit("openModal", "user-modal.edit-user" , {{
                                         json_encode(["user" => $housingunit->id]) }})'>
                                         Move to Trash
                                     </button>
                                 </div>
                             </div>
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
                 {{ $housingunits->onEachSide(0)->links() }}
             </div>
         </div>

     </div>
 </div>
</div>
