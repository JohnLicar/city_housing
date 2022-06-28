<?php

namespace App\Http\Livewire\Applicants;

use App\Http\Livewire\DataTable\WithSorting;
use App\Models\Applicant;
use Livewire\Component;
use Livewire\WithPagination;

class Applicants extends Component
{
    use WithPagination, WithSorting;
    public $search = '';

    public function render()
    {
        // $applicants = Applicant::search($this->search)
        $applicants = Applicant::search($this->search)
            ->with('info')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(5);
        return view('livewire.applicants.applicants', compact('applicants'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
