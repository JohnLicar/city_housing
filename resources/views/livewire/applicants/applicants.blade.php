<div class="mt-5 mb-5">

    <div class="relative flex justify-between mb-5">
        <a href="{{ route('applicants.create') }}">
            <x-button class="flex">

                {{ __('Add Applicants') }}
            </x-button>
        </a>

        <x-input wire:model.debounce.400ms="search" id="search" class="right-0 w-1/3 sm:w-1/2" type="text" name="search"
            placeholder="Search" :value="old('search')" />
        <div class="absolute top-4 right-3">
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
                <x-table.heading sortable multi-column wire:click="sortBy('first_name')"
                    :direction="$sorts['first_name'] ?? null">
                    Applicant
                </x-table.heading>
                <x-table.heading sortable multi-column wire:click="sortBy('birth_date')"
                    :direction="$sorts['birth_date'] ?? null">
                    Date of Birth
                </x-table.heading>
                <x-table.heading sortable multi-column wire:click="sortBy('civil_status')"
                    :direction="$sorts['civil_status'] ?? null">
                    Civil Status

                </x-table.heading>
                <x-table.heading sortable multi-column wire:click="sortBy('office')"
                    :direction="$sorts['office'] ?? null">
                    Office
                </x-table.heading>
                <x-table.heading sortable multi-column wire:click="sortBy('income_per_month')"
                    :direction="$sorts['income_per_month'] ?? null">
                    Income Per Month
                </x-table.heading>
                <x-table.heading sortable multi-column wire:click="sortBy('income_per_month')"
                    :direction="$sorts['income_per_month'] ?? null">
                    Added By
                </x-table.heading>
                <x-table.heading sortable multi-column wire:click="sortBy(' created_at')"
                    :direction="$sorts[' created_at'] ?? null">
                    Added On
                </x-table.heading>
            </x-slot>
            <x-slot name="body">
                @forelse ($applicants as $applicant)
                <x-table.row wire:loading.class="opacity-50">
                    <x-table.cell class="cell">
                        {{ $applicant->info->full_name }}
                    </x-table.cell>
                    <x-table.cell class="cell">
                        {{ $applicant->info->birth_date }}
                    </x-table.cell>
                    <x-table.cell class="cell">
                        {{ $applicant->info->civil_status }}
                    </x-table.cell>
                    <x-table.cell class="cell">
                        {{ $applicant->info->office }}
                    </x-table.cell>
                    <x-table.cell class="cell">
                        {{ $applicant->info->income_per_month }}
                    </x-table.cell>
                    <x-table.cell class="cell">
                        Licar Orion
                    </x-table.cell>
                    <x-table.cell class="cell">
                        {{ $applicant->created_at->format('F j, Y h:i:s A') }}
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
            {{ $applicants->links() }}
        </div>
    </div>

</div>
