<?php

namespace App\Http\Livewire\HousingUnit;

use App\Http\Livewire\DataTable\WithSorting;
use App\Models\HousingUnit as ModelsHousingUnit;
use Livewire\Component;
use Livewire\WithPagination;

class HousingUnit extends Component
{

    use WithPagination, WithSorting;

    protected $listeners = ['userTableRefreshEvent' => '$refresh'];

    public function render()
    {
        $housingunits = ModelsHousingUnit::query()
            ->with('housingproject')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.housing-unit.housing-unit', compact('housingunits'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
