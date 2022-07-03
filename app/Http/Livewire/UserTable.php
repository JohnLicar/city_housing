<?php

namespace App\Http\Livewire;

use App\Http\Livewire\DataTable\WithSorting;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination, WithSorting;

    public $search = '';
    public $approval_status;
    public $start;
    public $end;
    public $status;

    protected $listeners = ['userTableRefreshEvent' => '$refresh'];

    public function render()
    {
        $users = User::query()
            ->where('id', '!=', auth()->id())
            ->where(fn($query) => 
                $query->when($this->start, fn($query) => $query->whereDate('created_at', '>=', $this->start))
                ->when($this->end, fn($query) => $query->whereDate('created_at', '<=', $this->end))
                ->when($this->approval_status, fn($query) => $query->where('approve', $this->status))
            )
            ->where(fn($query) => 
                $query->whereLike('first_name', $this->search)
                ->whereLike('middle_name', $this->search)
                ->whereLike('last_name', $this->search)
            )
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);
     
        return view('livewire.user-table', compact('users'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function setFilter()
    {
        $this->status = $this->approval_status == 'Pending' ? 0 : 1;
        $this->emitSelf('$refresh');
    }

    public function resetFilter()
    {
        $this->reset();
    }

}
