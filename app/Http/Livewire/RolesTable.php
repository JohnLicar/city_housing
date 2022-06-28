<?php

namespace App\Http\Livewire;

use App\Http\Livewire\DataTable\WithSorting;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RolesTable extends Component
{
    use WithSorting;

    public $search = '';
    public function render()
    {
        $roles = Role::query()
            ->with(['permissions:id,name'])
            ->where(fn($query) => 
                $query->whereLike('name', $this->search)
            )
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.roles-table', compact('roles'));
    }
}
