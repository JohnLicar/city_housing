<?php

namespace App\Http\Livewire\HousingUnit;

use App\Models\HousingProject;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use LivewireUI\Modal\ModalComponent;

class EditModal extends ModalComponent
{
    use AuthorizesRequests;


    public $housingproject;
    public $project;
    public $location;
    public $description;

    protected $rules = [
        'project' => ['bail', 'required', 'max:120'],
        'location' => ['bail', 'required', 'max:120'],
        'description' => ['bail', 'required'],
    ];

    public function mount(HousingProject $housingproject)
    {
        $this->authorize('housingprojct_update');
        $housingprojects = $housingproject;
        $this->project =   $housingprojects->project;
        $this->location =   $housingprojects->location;
        $this->description =   $housingprojects->description;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.housing-unit.edit-modal');
    }
}
