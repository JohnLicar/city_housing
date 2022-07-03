<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ConfirmDeleteModal extends ModalComponent
{

    use AuthorizesRequests;
    public $user;
    public $arhive;

    public function mount($user, $archive = null)
    {
        $this->archive = $archive;
        $userInfo = User::withTrashed()->find($user);
        $this->user = $userInfo;
    }

    public function restoreDelete()
    {
        if ($this->archive == "restore") {
            $this->user->restore();
        } elseif ($this->archive == "delete") {
            $this->authorize('user_delete');
            $this->user->delete();
        }
        $this->emit('archiveUserTableRefreshEvent');
        $this->emit('userTableRefreshEvent');
        $this->closeModal();
    }


    public function render()
    {
        return view('livewire.confirm-delete-modal');
    }
}
