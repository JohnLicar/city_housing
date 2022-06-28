<?php

namespace App\Http\Livewire\UserModal;

use LivewireUI\Modal\ModalComponent;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CreateUser extends ModalComponent
{
    use AuthorizesRequests;
    public $roles;

    public $first_name;
    public $middle_name;
    public $last_name;
    public $gender;
    public $address;
    public $contact;
    public $role;
    public $email;
    public $start;


    protected $rules = [
        'first_name' => ['bail', 'required', 'max:120'],
        'middle_name' => ['bail', 'nullable', 'max:120'],
        'last_name' => ['bail', 'required', 'max:120'],
        'gender' => ['bail', 'required'],
        'contact' => ['bail', 'required', 'min:11'],
        'address' => ['bail', 'required', 'min:10'],
        'role' => ['bail', 'required'],
        'email' => ['bail', 'required', 'email'],
    ];


    public function mount()
    {
        $this->authorize('user_create');
        $this->roles = \Spatie\Permission\Models\Role::all();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.user-modal.create-user');
    }
}
