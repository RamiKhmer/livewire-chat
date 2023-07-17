<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class Chatbox extends Component
{
    public $selectedConversation;
    public $messages;
    public $paginateVar = 10;
    public $height;
    public $receiverInstance;
    public $messages_count;

    protected $listeners = ['loadConversation', 'pushMessage'];

    public function pushMessage($messageId) {

        $newMessage = Message::find($messageId);

        $this->messages->push($newMessage);

        // $this->dispatchBrowserEvent('rowChatToBottom');
        $this->dispatchBrowserEvent('chatSelected');
        
    }


    public function loadConversation(Conversation $conversation, User $receiver){

        // dd($conversation, $receiver);

        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;

        $this->messages_count = Message::where('conversation_id', $this->selectedConversation->id)->count();

        $this->messages = Message::where('conversation_id', $this->selectedConversation->id)
            ->skip($this->messages_count - $this->paginateVar)
            ->take($this->paginateVar)->get();

            $this->dispatchBrowserEvent('chatSelected');
    }

    public function render()
    {
        return view('livewire.chat.chatbox');
    }
}
