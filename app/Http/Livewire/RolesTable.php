<?php

namespace App\Http\Livewire;

use App\Http\Livewire\DataTable\WithSorting;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RolesTable extends Component
{
    use WithSorting;

    public $search = '';

    protected $listeners = ['roleUpdated' => '$refresh'];
     
    public function render()
    {
        $roles = Role::query()
            ->with(['permissions:id,name'])
            ->withCount('users')
            ->where(fn($query) => 
                $query->whereLike('name', $this->search)
            )
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);
        return view('livewire.roles-table', compact('roles'));
    }

    // public function exportDB()
    // {
    //     Artisan::call('backup:run --only-db');
    //     $this->emit('showToastNotification', ['title' => 'DB Backup', 'message' => 'Database backup started...']);
    // }
}
