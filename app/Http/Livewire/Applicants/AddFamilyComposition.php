<?php

namespace App\Http\Livewire\Applicants;

use Livewire\Component;

class AddFamilyComposition extends Component
{

    public $familyCompositions = [];


    public function mount()
    {
        $this->familyCompositions[] = [];
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addItem()
    {
        $this->familyCompositions[] = [];
    }

    public function render()
    {
        return view('livewire.applicants.add-family-composition');
    }
}
