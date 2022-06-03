<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public $search = '';
    public function render()
    {
        $users = User::search($this->search)
            ->where('id', '!=', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('livewire.user-table', compact('users'));
    }
}
