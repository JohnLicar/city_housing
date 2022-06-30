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
    public $civil_status;
    public $income_per_month;
    public $start;
    public $office;

    protected $listeners = [
        'civilStatus' => 'updateCivilStatus',
        'income_per_month' => 'updateIncomePerMonth',
        'start' => 'updateStart',
        'office' => 'updateOffice',
    ];


    public function updateCivilStatus($value)
    {
        $this->civil_status = $value;
        $this->emitSelf('render');
    }

    public function updateIncomePerMonth($value)
    {

        $this->income_per_month = $value;
        $this->emitSelf('render');
    }
    public function updateStart($value)
    {

        $this->start = $value;
        $this->emitSelf('render');
    }
    public function updateOffice($value)
    {

        $this->office = $value;
        $this->emitSelf('render');
    }

    public function render()
    {
        $applicants = Applicant::search($this->search)
            ->with('info')
            ->when($this->civil_status, function ($query, $civil_status) {
                $query->whereRelation('info', 'civil_status', $civil_status);
            })
            ->when($this->income_per_month, function ($query, $income_per_month) {
                $query->whereRelation('info', 'income_per_month', 'like', '%' . $income_per_month . '%');
            })
            ->when($this->office, function ($query, $office) {
                $query->whereRelation('info', 'office', $office);
            })
            // ->whereHas('info', function ($query) {
            //     $query->orWhere('birth_date', $this->start);
            // })

            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(5);
        return view('livewire.applicants.applicants', compact('applicants'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
