<?php

namespace App\Http\Livewire\HousingProject;

use App\Models\HousingProject;
use Livewire\Component;
use Livewire\WithPagination;

class HousingProjectTable extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $housings = HousingProject::search($this->search)
            ->latest()
            ->paginate(5);
        return view('livewire.housing-project.housing-project-table', compact('housings'));
    }
}
