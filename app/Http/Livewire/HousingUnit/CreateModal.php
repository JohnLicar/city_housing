<?php

namespace App\Http\Livewire\HousingUnit;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use LivewireUI\Modal\ModalComponent;

class CreateModal extends ModalComponent
{
    use AuthorizesRequests;

    public $project;
    public $location;
    public $description;

    protected $rules = [
        'project' => ['bail', 'required', 'max:120'],
        'location' => ['bail', 'required', 'max:120'],
        'description' => ['bail', 'required'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        // $this->authorize('housingprojct_create');
        return view('livewire.housing-unit.create-modal');
    }
}
