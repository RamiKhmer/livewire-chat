<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class Main extends Component
{
    public $receiverInstance;

    protected $listeners = ['receiverInstanceFunc'];

    public function receiverInstanceFunc($receiverInstance){
        $this->receiverInstance = $receiverInstance;
        // dd($receiverInstance);
    }

    public function render()
    {
        return view('livewire.chat.main');
    }
}
