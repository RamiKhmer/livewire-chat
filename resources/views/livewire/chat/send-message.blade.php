<div>
    @if ($selectedConversation)
        <form wire:submit.prevent='sendMessage'  class="bg-light">
        <div class="input-group">
            <input type="text" wire:model='body' placeholder="Type a message" aria-describedby="button-addon2"
                class="form-control rounded-0 border-0 py-4 bg-light">
            <div class="input-group-append">
                <button id="button-addon2" type="submit" class="btn btn-link"> <i
                        class="fa fa-paper-plane"></i></button>
            </div>
        </div>
    </form>
    @endif
    
</div>
