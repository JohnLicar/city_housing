<?php

namespace App\Http\Livewire\Applicants;

use Livewire\Component;

class AddFamilyComposition extends Component
{

    public $familyComposition = [];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addItem()
    {
        $this->familyComposition[] = ['inventory_id' => '', 'quantity' => ''];
    }

    public function render()
    {
        return view('livewire.applicants.add-family-composition');
    }
}
