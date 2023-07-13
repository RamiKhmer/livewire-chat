<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}


    
<ul class="list-group w-75 mx-auto mt-3 container-fluid" style="height: 1000px">

@foreach ($users as $user)


    <li class="list-group-item list-group-item-action" wire:click='checkconversation({{$user->id}})'>
        <img src="https://picsum.photos/id/2{{$user->id}}/200/200" alt="user" width="50" class="rounded-circle">
        {{$user->name}}
    </li>


@endforeach
 </ul>

</div>
