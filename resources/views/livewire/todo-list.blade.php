<div class="container">

    <div class="mt-20 mb-2">
        <p class="text-xl font-bold text-center">Todos</p>
    </div>
    <div class="flex justify-center">

        <input type="text" wire:model.live='todo' class="rounded-l-lg p-1 text-black">
        <button wire:click='add' class="rounded-r-lg bg-white text-[#141414] px-2 font-light border-l-2">Add</button>
    </div>
    {{$todo}}


    <div class="flex justify-center">


        @foreach ($todos as $todo)
<br>
        {{ $todo['task'] }}</td> -
        {{ $todo['status'] }}</td> -
        <button class="rounded-lg bg-white text-[#141414] px-2 font-light border-2">Action</button>
        <button class="rounded-lg bg-white text-[#141414] px-2 font-light border-2">Action</button>
        <br>

        @endforeach

    </div>
</div>
