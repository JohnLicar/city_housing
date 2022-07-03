<?php

namespace App\Http\Livewire\Filter;

use LivewireUI\Modal\ModalComponent;

class FilterModal extends ModalComponent
{
    public $filterable = [
        'civil_status' => '',
        'start_income_per_month'  => '',
        'end_income_per_month'  => '',
        'start'  => '',
        'end'  => '',
        'office'  => '',
    ];
    public function render()
    {
        return view('livewire.filter.filter-modal');
    }


    public function filterApplicant()
    {
        $this->emit('filter', $this->filterable);
    }

    public function resetFilter()
    {
        $this->reset();
        $this->emit('reset', $this->filterable);
    }
}
