<?php

namespace App\Http\Livewire\HousingUnit;

use App\Models\HousingProject;
use Livewire\Component;
use Livewire\WithPagination;

class HousingUnitTable extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $housings = HousingProject::search($this->search)
            ->paginate(5);
        return view('livewire.housing-unit.housing-unit-table', compact('housings'));
    }
}
