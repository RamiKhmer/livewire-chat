<div class="row rounded-lg overflow-hidden shadow pt-3">
    <!-- Users box-->
    @livewire('chat.chat-list')
    <!-- Chat Box-->
    <div class="col-7 px-0 ">
        <div class="bg-primary px-4 py-2 bg-light">
            @if ($receiverInstance)
                <img src="https://picsum.photos/id/2{{$receiverInstance ? $receiverInstance['id'] : ' '}}/200/200" alt="user" width="50" class="rounded-circle">
            <span class="h5 mb-0 py-1">{{$receiverInstance ? $receiverInstance['name'] : ' '}}</span>
            @endif
        </div>
        
        @livewire('chat.chatbox')
        <!-- Typing area -->
        @livewire('chat.send-message')

    </div>
    
</div>