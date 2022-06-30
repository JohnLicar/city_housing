<?php

namespace App\Http\Livewire\Filter;

use LivewireUI\Modal\ModalComponent;

class FilterModal extends ModalComponent
{
    public $civil_status;
    public $income_per_month;
    public $start;
    public $office;
    public function render()
    {
        return view('livewire.filter.filter-modal');
    }

    public function updatedCivilStatus($value)
    {
        $this->emit('civilStatus', $value);
    }

    public function updatedIncomePerMonth($value)
    {
        $this->emit('income_per_month', $value);
    }

    public function updatedStart($value)
    {
        $this->emit('start', $value);
    }
    public function updatedOffice($value)
    {
        $this->emit('start', $value);
    }
}
