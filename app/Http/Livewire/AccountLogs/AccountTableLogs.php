<?php

namespace App\Http\Livewire\AccountLogs;

use App\Http\Livewire\DataTable\WithSorting;
use Livewire\Component;
use Spatie\Activitylog\Models\Activity;
use Livewire\WithPagination;

class AccountTableLogs extends Component
{
    use WithPagination, WithSorting;

    public $search = '';
    public $start;
    public $end;

    public function render()
    {
        $logs = Activity::query()
            ->when($this->start, fn($query) => $query->whereDate('created_at', '>=', $this->start))
            ->when($this->end, fn($query) => $query->whereDate('created_at', '<=', $this->end))
            ->where(fn($query) => 
               $query->whereLike('log_name', $this->search)
                ->whereLike('event', $this->search)
                ->whereLike('description', $this->search)
            )
            ->where('causer_id', auth()->user()->id)
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.account-logs.account-table-logs', ['logs' => $logs]);
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedStart()
    {
        $this->resetPage();
    }

    public function updatedEnd()
    {
        $this->resetPage();
    }

    public function resetFilter(){
        $this->start = null;
        $this->end = null;
    }
   
}
