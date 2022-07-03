<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class UserDetailModal extends ModalComponent
{
    public $user;
    public $archive;

    public function mount($user, $archive = null)
    {
        $this->archive = $archive;
        $userInfo = User::withTrashed()->find($user);
        $this->user = $userInfo;
    }

    public function render()
    {
        return view('livewire.user-detail-modal');
    }

    public function approveUser()
    {
        $user = User::where('id', $this->user->id)->first();
        $user->update([
            'approve' => 1
        ]);

        $this->emit('showToastNotification', ['type' => 'success', 'title' => 'Account Approved', 'message' => 'User account has been approved.']);
        $this->closeModal();    
    }
}
