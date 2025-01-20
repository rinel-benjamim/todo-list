<div class="container">

    <div class="mt-20 mb-2">
        <p class="text-xl font-bold text-center">Todos</p>
    </div>
    <form class="flex justify-center" wire:submit='add'>

        <input type="text" wire:model.live='todo' class="rounded-l-lg p-1 text-black">
        <button type="submit" class="rounded-r-lg bg-white text-[#141414] px-2 font-light border-l-2">Add</button>
    </form>
    {{$todo}}


    <div class="flex justify-around flex-row flex-wrap">


        @foreach ($todos as $todo)
        <div class="flex flex-col m-3 flex-wrap bg-[#221e1e] w-56 rounded-lg hover:bg-[#1f1919]">

            <div class="flex flex-row justify-between">
                <div class="p-1 w-24">
                    🗒 <br>
                    {{ $todo['task'] }}
                </div>

                <div class="p-1 w-20">
                    ⚡ <br>
                    {{ $todo['status'] }}
                </div>
            </div>

            <div>
                <hr class="border border-slate-600 mt-5 mb-1">

                <div class="flex flex-row p-2 justify-between">

                    <button class="rounded-lg bg-white text-[#141414] px-2 font-light border-2">Action</button>
                    <button class="rounded-lg bg-white text-[#141414] px-2 font-light border-2">Action</button>
                </div>
            </div>
        </div>
        <br>

        @endforeach

    </div>
</div>
