
<div class="chatbox_body px-4 py-5 chat-box bg-white">
    @if ($selectedConversation)
        @forelse ($messages as $item)
            <!-- Reciever Message-->
            @if ($item->sender_id == $receiverInstance->id)
                <div wire:key='{{$item->id}}' class=" media w-50 mb-3"><img src="https://picsum.photos/id/2{{$item->receiver_id}}/200/200"
                        alt="user" width="50" class="rounded-circle">
                    <div class="media-body ml-3">
                        <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">{{$item->body}}</p>
                        </div>
                        <p class="small text-muted">{{  $item->created_at->format('g:i A | F d') }}</p>
                    </div>
                </div>
            @endif
            <!-- Sender Message-->
            @if ($item->sender_id == auth()->id())
                <div wire:key='{{$item->id}}' class=" media w-50 ml-auto mb-3">
                    <div class="media-body">
                        <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">{{$item->body}}</p>
                        </div>
                        <p class="small text-muted">{{  $item->created_at->format('g:i A | F d') }}</p>
                    </div>
                </div>
            @endif
        @empty
            <div class="media w-50 ml-auto mb-3">
                <div class="media-body">
                    <p class="text-danger">No message available</p>
                </div>
            </div>
        @endforelse

        
    @else
    <div class="">
        <div class="media-body">
            <h2 class="text-danger text-center">No Conversation Available</h2>
        </div>
    </div>
    @endif


{{-- នាទី 6:09 --}}







</div>
