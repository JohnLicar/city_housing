<?php

namespace App\Http\Livewire\Role;

use LivewireUI\Modal\ModalComponent;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class EditRole extends ModalComponent
{
    use AuthorizesRequests;
    public $role;
    public $permissions ;
    public $selectedPermissions = [];

    public function render()
    {
        return view('livewire.role.edit-role');
    }

    public function mount($role)
    {
        $this->authorize('role_edit');
        $this->role = $role;
        $this->permissions = Permission::get();
        $this->selectedPermissions = array_column($role['permissions'], 'id');
    }

    public function updateRole()
    {
        $this->authorize('role_edit');
        $role = Role::find($this->role['id'])->first();
        $role->syncPermissions($this->selectedPermissions);
        $role->update([
            'name' => $this->role['name']
        ]);
        $this->emit('roleUpdated');
        $this->forceClose()->closeModal();
    }
}
