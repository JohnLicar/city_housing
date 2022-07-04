<?php

namespace App\Http\Livewire\Applicants;

use App\Models\Applicant;
use LivewireUI\Modal\ModalComponent;

class ConfirmationModal extends ModalComponent
{
    public $arhive;
    public  $applicant;


    public function mount($applicant, $archive = null)
    {

        $this->archive = $archive;
        $applicantInfo = Applicant::withTrashed()->find($applicant);
        $this->applicant = $applicantInfo;
    }

    public function render()
    {
        return view('livewire.applicants.confirmation-modal');
    }

    public function restoreOrArchive()
    {
        if ($this->archive === "restore") {
            $this->applicant->restore();
        } elseif ($this->archive === "archive") {
            $this->applicant->delete();
        }

        $this->emit('archiveApplicantTableRefreshEvent');
        $this->emit('ApplicantTableRefreshEvent');
        $this->closeModal();
    }
}
