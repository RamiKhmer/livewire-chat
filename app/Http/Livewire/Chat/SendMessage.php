<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Message;
use Livewire\Component;

class SendMessage extends Component
{

    public $selectedConversation;
    public $receiverInstance;
    public $body;

    protected $listeners = ['updateSendMessage'];

    public function updateSendMessage(Conversation $conversation, $receiverInstance) {
    //    dd($conversation, $receiverInstance);
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiverInstance;
    }

    public function sendMessage() {
        

        if($this->body == null){
            
            // dd($this->body);
            return null;

        }

        $createdMessage = Message::create([
        'conversation_id' => $this->selectedConversation->id, 
        'sender_id' => auth()->id(), 
        'receiver_id' => $this->receiverInstance['id'], 
        'body' => $this->body,
        ]);

        $this->selectedConversation->last_time_message = $createdMessage->created_at;
        $this->selectedConversation->save();

        $this->emitTo('chat.chatbox', 'pushMessage', $createdMessage->id);

        $this->reset('body');
    }

    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
