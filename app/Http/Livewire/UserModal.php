<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class UserModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.user-modal');
    }
}
