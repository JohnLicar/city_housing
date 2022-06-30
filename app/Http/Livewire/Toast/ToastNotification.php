<?php

namespace App\Http\Livewire\Toast;

use Livewire\Component;

class ToastNotification extends Component
{
    protected $listeners = ['showToastNotification'];

    public $toastType = 'default';
    public $cssPosition;
    public $cssBackground;
    public $cssTextColor;
    public $title = '';
    public $message = '';
    public $duration;
    public $data;

    public function render()
    {
        $this->setNotificationPosition();
        $this->setNotificationDuration();
        $this->setNotificationProperties();
        // $this->setNotificationType();

        return view('livewire.toast.toast-notification');
    }

    public function mount()
    {
        if($message = session('livewire-toast')) {
            $this->showToastNotification($message);
        }
    }

    public function showToastNotification($params)
    {
        $type = '';
        if (is_array($params)) {
            $type = $params['type'] ?? '';
            $this->title = $params['title'] ?? '';
            $this->message = $params['message'] ?? '';
        } else {
            $this->message = $params;
        }

        $this->setNotificationType($type);

        if (!empty($this->message)) {
            $this->dispatchBrowserEvent('new-toast');
        }

    }

    private function setNotificationDuration()
    {
        $this->duration = (int)config('toast-notification.duration');
    }

    private function setNotificationProperties()
    {
        $this->cssBackground = config('toast-notification.color.bg.' . $this->toastType);
        $this->cssTextColor =  $this->toastType === 'default' ? 'gray' : 'white';
       
    }

    private function setNotificationType($type = '')
    {
        if (in_array($type, ['default', 'warning', 'info', 'error', 'success'])) {
            $this->toastType = $type;
        } else {
            $this->toastType = config('toast-notification.type');
        }
                
        $this->setNotificationProperties();
    }

    private function setNotificationPosition()
    {
        switch (config('toast-notification.position')) {
            case 'top-left':
                $this->cssPosition = 'top-4 left-3';
                break;
            case 'top-right':
                $this->cssPosition = 'top-4 right-3';
                break;
            case 'bottom-left':
                $this->cssPosition = 'bottom-4 left-4';
                break;
            case 'bottom-right':
                $this->cssPosition = 'bottom-4 right-4';
                break;

            default:
                $this->cssPosition = 'top-4 right-3';
        }
    }
}
