<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ArchiveUserTable extends Component
{
    public $search;
    public function render()
    {
        $users = User::onlyTrashed()
            //anot maupay himoon ini master? na error kasi pag 2nd it search na scope
            // ->search($this->search)
            ->where('id', '!=', auth()->id())
            ->orderBy('deleted_at', 'desc')
            ->paginate(5);
        return view('livewire.archive-user-table', compact('users'));
    }
}
