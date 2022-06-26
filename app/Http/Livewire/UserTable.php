<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;
    public $search = '';
    protected $listeners = ['userTableRefreshEvent' => '$refresh'];

    public function render()
    {
        $users = User::search($this->search)
            ->where('id', '!=', auth()->id())
            // ->orderBy('created_at', 'desc')
            ->where('created_at', '<=', now()->addDays(3))
            ->latest()
            ->paginate(5);

        return view('livewire.user-table', compact('users'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
