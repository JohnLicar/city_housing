<?php

namespace App\Http\Livewire\Role;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class DeleteRole extends ModalComponent
{
    public $selectedRole;
    public $roles;
    public $updatedRole;

    protected $rules = [
        'updatedRole' => 'required'
    ];

    public function render()
    {
        return view('livewire.role.delete-role');
    }

    public function mount($selectedRole)
    {
        $this->roles = \Spatie\Permission\Models\Role::all();
        $this->selectedRole = $selectedRole;
    }

    public function deleteRole()
    {
        $this->validate();
        $users = User::with("roles")->whereHas("roles", function($q) {
            $q->whereIn("id", [$this->selectedRole['id']]);
        })->get();

        foreach($users as $user){
            $user->syncRoles([$this->updatedRole]);
        }

        Role::destroy($this->selectedRole['id']);
        $this->emit('roleUpdated');
        $this->emit('showToastNotification', ['type' => 'success', 'message' => 'Role has been deleted successfully!', 'title' => 'Successfully Deleted']);

        $this->forceClose()->closeModal();

    }
}
