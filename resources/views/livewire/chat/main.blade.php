<div class="row rounded-lg overflow-hidden shadow pt-3">
    <!-- Users box-->
    @livewire('chat.chat-list')
    <!-- Chat Box-->
    <div class="col-7 px-0 ">
        <div class="bg-primary px-4 py-2 bg-light">
            <p class="h5 mb-0 py-1">Message Box</p>
        </div>
        
        @livewire('chat.chatbox')
        <!-- Typing area -->
        @livewire('chat.send-message')

    </div>
    
</div>