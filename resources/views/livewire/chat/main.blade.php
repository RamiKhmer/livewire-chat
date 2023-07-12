<div class="row rounded-lg overflow-hidden shadow pt-3">
    <!-- Users box-->
    @livewire('chat.chat-list')
    <!-- Chat Box-->
    <div class="col-7 px-0 ">
        
        @livewire('chat.chatbox')
        <!-- Typing area -->
        @livewire('chat.send-message')

    </div>
    
</div>