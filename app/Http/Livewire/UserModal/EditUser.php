<?php

namespace App\Http\Livewire\UserModal;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    use AuthorizesRequests;

    public $user;
    public $roles;

    public $first_name;
    public $middle_name;
    public $last_name;
    public $gender;
    public $address;
    public $contact;
    public $role;
    public $approve;



    protected $rules = [
        'first_name' => ['bail', 'required', 'max:120'],
        'middle_name' => ['bail', 'nullable', 'max:120'],
        'last_name' => ['bail', 'required', 'max:120'],
        'gender' => ['bail', 'required'],
        'contact' => ['bail', 'required', 'min:11'],
        'address' => ['bail', 'required', 'min:10'],
        'role' => ['bail', 'required', 'min:10'],
        'approve' => ['bail', 'required', 'boolean'],
    ];


    public function mount($user)
    {
        $this->authorize('user_update');
        $this->roles = \Spatie\Permission\Models\Role::all();
        $userInfo = User::withTrashed()->find($user);
        $this->first_name = $userInfo->first_name;
        $this->middle_name = $userInfo->middle_name;
        $this->last_name = $userInfo->last_name;
        $this->gender = $userInfo->gender;
        $this->address = $userInfo->address;
        $this->contact = $userInfo->contact;
        $this->role = $userInfo->roles[0]->name;
        $this->approve = $userInfo->approve;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.user-modal.edit-user');
    }
}
