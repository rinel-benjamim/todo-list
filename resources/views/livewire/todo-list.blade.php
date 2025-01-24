<div>

    <div>
        <h1 class="text-center mt-6 mb-1">Livewire Todo List</h1>
    </div>

    <form wire:submit.prevent='add' class="mb-2">
        <div class="text-center">
            <input type="text" placeholder="Add your task..." wire:model.defer='todo'
                class="bg-[#f1f0f0] p-2 rounded-full w-96">

        </div>
    </form>

    {{$todo}}

    <div class="flex flex-col">
        Todos: {{ count($todos) }}
        @foreach ($todos as $todo)
        <div class="flex flex-row bg-[#f1f0f0] p-3 my-1 mx-6 justify-between rounded-lg items-center">

            <div class="break-words max-w-[75%]
            @if ($todo['status'] )
                {{'line-through'}}
            @endif
            ">
                {{ $todo['task'] }}
            </div>

            <div class="flex flex-row space-x-3">
                <div>
                    <input type="checkbox" @checked($todo['status']) class="p-1 w-6 h-6 ">
                </div>

                <div class="">
                    <button><i class="fa-solid fa-trash fa-lg"></i></button>
                </div>

            </div>
        </div>

    </div>

    @endforeach

</div>
</div>
