<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RolesTable extends Component
{
    public function render()
    {
        $roles = Role::query()
            ->with('permissions')
            ->get();

        return view('livewire.roles-table', compact('roles'));
    }
}
