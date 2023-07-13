<div class="col-5 px-0">
    <div class="bg-white">

        <div class="bg-gray px-4 py-2 bg-light">
            <p class="h5 mb-0 py-1">Recent Chat List</p>
        </div>

        <div class="messages-box">
            <div class="list-group rounded-0">
                @forelse ($conversations as $item)
                    <a wire:click="$emit('chatUserSelected', {{$item}},{{ $this->getChatUserInstance($item, $name = 'id') }})" class="list-group-item list-group-item-action rounded-0">
                        <div class="media"><img
                                src="https://picsum.photos/id/2{{ $this->getChatUserInstance($item, $name = 'id') }}/200/200"
                                alt="user" width="50" class="rounded-circle">
                            <div class="media-body ml-4">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <h6 class="mb-0">{{ $this->getChatUserInstance($item, $name = 'name') }}</h6>
                                    <small class="small font-weight-bold">
                                        {{ $item->messages->last()?->created_at->diffForHumans() }}
                                    </small>
                                </div>
                                <p class="font-italic mb-0 text-small">{{ $item->messages->last()->body }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="text-danger">You have no conversation</p>
                @endforelse

            </div>
        </div>
    </div>
</div>
