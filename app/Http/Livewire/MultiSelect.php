<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class MultiSelect extends Component
{


    public function render()
    {
        return view('livewire.multi-select');
    }
}
