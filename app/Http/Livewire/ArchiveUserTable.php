<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ArchiveUserTable extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $users = User::search($this->search)
            ->getTrashed()
            ->where('id', '!=', auth()->id())
            ->orderBy('deleted_at', 'desc')
            ->paginate(5);

        return view('livewire.archive-user-table', compact('users'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
