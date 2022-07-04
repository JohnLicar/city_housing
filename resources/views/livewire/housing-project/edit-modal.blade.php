<div>
 <div class="w-9/12 ">
     <div class="overflow-auto bg-white shadow-sm w-96 sm:rounded-lg">
         <div class="p-6 bg-white border-b border-gray-200">

             <form method="POST" action="{{  route('housingprojects.update', $housingproject )}}"
                 enctype="multipart/form-data">
                 @method('PUT')
                 @csrf
                 <div class="mb-5">
                     <p class="text-xl font-medium text-left">Create new Housing Project</p>
                     <p class="text-sm text-left text-gray-500">All fields are required</p>
                 </div>

                 <div>
                     <div class="mt-4">
                         <div class="relative">
                             <x-floating-input type="text" id="project" name="project" wire:model="project"
                                 class="block w-full border-2 " required />
                             <x-floating-label for="project" :value="__('Project')" />
                         </div>
                         @error('project')
                         <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                             $message
                             }}</p>
                         @enderror
                     </div>

                     <div class="mt-4">
                         <div class="relative">
                             <x-floating-input type="text" id="location" name="location" wire:model="location" />
                             <x-floating-label for="location" :value="__('Location')" />
                         </div>
                         @error('location')
                         <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                             $message
                             }}</p>
                         @enderror
                     </div>

                     <div class="mt-4">
                         <div class="relative">
                             <x-floating-input type="text" id="description" name="description"
                                 wire:model="description" required />
                             <x-floating-label for="description" :value="__('Description')" />
                         </div>
                         @error('description')
                         <p id="outlined_error_help" class="mt-2 text-xs text-left text-red-600 dark:text-red-400">{{
                             $message
                             }}</p>
                         @enderror
                     </div>

                 </div>


                 <div class="mt-4">
                     <div class="flex items-center justify-end mt-4">
                         <x-back-button wire:click="$emit('closeModal')" class="ml-3">
                             {{ __('Back') }}
                         </x-back-button>
                         <x-button class="ml-3">
                             {{ __('Update') }}
                         </x-button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
</div>
