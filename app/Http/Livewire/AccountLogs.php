<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Activitylog\Models\Activity;

class AccountLogs extends Component
{
    public function render()
    {
        $logs = Activity::where('causer_id', auth()->user()->id)->latest()->paginate(10);

        return view('livewire.account-logs', compact('logs'));
    }
}
