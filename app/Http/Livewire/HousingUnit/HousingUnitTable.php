<?php

namespace App\Http\Livewire\HousingUnit;

use App\Models\HousingProject;
use Livewire\Component;

class HousingUnitTable extends Component
{
    public function render()
    {
        $housings = HousingProject::all();
        return view('livewire.housing-unit.housing-unit-table', compact('housings'));
    }
}
