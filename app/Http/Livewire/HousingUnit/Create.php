<?php

namespace App\Http\Livewire\HousingUnit;

use App\Models\HousingProject;
use App\Models\HousingUnit;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{
    use AuthorizesRequests;

    public $housing_project_id;
    public $phase_no;
    public $block_no;
    public $lot_no;
    public $remark;

    protected $rules = [
        'housing_project_id' => ['bail', 'required'],
        'phase_no' => ['bail', 'required'],
        'block_no' => ['bail', 'required'],
        'lot_no' => ['bail', 'required'],
        'remark' => ['bail', 'required'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $housing_projects = HousingProject::latest()->get();
        return view('livewire.housing-unit.create', compact('housing_projects'));
    }

    public function saveHousingUnit()
    {

        $this->authorize('role_create');

        HousingUnit::create($this->validate());
        $this->emit('userTableRefreshEvent');
        $this->emit('showToastNotification', ['type' => 'success', 'message' => 'Housing Unit created successfully!', 'title' => 'Success']);
        $this->forceClose()->closeModal();
    }
}
