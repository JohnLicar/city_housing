<?php

namespace App\Http\Livewire\AccountLogs;

use Livewire\Component;
use Spatie\Activitylog\Models\Activity;
use Livewire\WithPagination;

class AccountTableLogs extends Component
{
    use WithPagination;

    public $search = '';
    protected $listeners = ['userTableRefreshEvent' => '$refresh'];

    public function render()
    {
        $logs = Activity::query()
            ->whereLike('log_name', $this->search)
            ->whereLike('event', $this->search)
            ->whereLike('description', $this->search)
            ->where('causer_id', auth()->user()->id)
            ->latest()
            ->paginate(10);
        return view('livewire.account-logs.account-table-logs', ['logs' => $logs]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
