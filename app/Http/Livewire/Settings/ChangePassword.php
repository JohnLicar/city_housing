<?php

namespace App\Http\Livewire\Settings;

use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;

class ChangePassword extends ModalComponent
{
    public $current_password;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'current_password' => 'current_password:web',
        'password' =>  ['required', 'string', 'confirmed'],
        'password_confirmation' =>  ['required', 'string', 'required_with:password_confirmation', 'same:password_confirmation']
    ];

    protected $messages = [
        'current_password' => 'Current Password is incorrect',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatedPasswordConfirmation()
    {
        $this->validateOnly('password');
    }

    public function render()
    {
        return view('livewire.settings.change-password');
    }

    public function updatePassword()
    {
        $this->validate();
        auth()->user()->update([
            'password' => Hash::make($this->password)
        ]);
        $this->closeModal();
        $this->emit('showToastNotification', ['title' => 'Password Updated', 'type' => 'success', 'message' => 'Your password has been updated']);
    }
}
