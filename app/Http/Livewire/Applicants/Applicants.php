<?php

namespace App\Http\Livewire\Applicants;

use App\Models\Applicant;
use Livewire\Component;

class Applicants extends Component
{
    public function render()
    {
        $applicants = Applicant::with('info')->get();

        return view('livewire.applicants.applicants');
    }
}