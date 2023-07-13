<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use Livewire\Component;

class SendMessage extends Component
{

    public $selectedConversation;
    public $receiverInstance;

    protected $listeners = ['updateSendMessage'];

    public function updateSendMessage(Conversation $conversation, $receiverInstance) {
    //    dd($conversation, $receiverInstance);
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiverInstance;
    }

    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
