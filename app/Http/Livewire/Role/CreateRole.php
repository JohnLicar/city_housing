<?php

namespace App\Http\Livewire\Role;

use LivewireUI\Modal\ModalComponent;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateRole extends ModalComponent
{
    use AuthorizesRequests;
    public $role;
    public $permissions ;
    public $selectedPermissions = [];

    public function render()
    {
        return view('livewire.role.create-role');
    }

    public function mount()
    {
        $this->authorize('role_edit');
        $this->permissions = Permission::get();
    }

    public function saveRole()
    {
        $this->authorize('role_create');
        $role = Role::create([
            'name' => $this->role
        ]);
        $role->syncPermissions($this->selectedPermissions);
        $this->emit('showToastNotification', ['type' => 'success', 'message' => 'Role created successfully!', 'title' => 'Success']);
        $this->emit('roleUpdated');
        $this->forceClose()->closeModal();
    }

}
