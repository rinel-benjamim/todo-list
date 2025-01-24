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



    <div class="container lg:mx-24 flex flex-col">
        <p>Todos: {{ count($todos) }}</p>

        @foreach ($todos as $index => $todo)
        <div wire:key='todo-{{$index}}'
            class="flex flex-row bg-[#f1f0f0] p-3 my-1 mx-6 justify-between rounded-lg items-center">

            <div class="font-extrabold break-words max-w-[75%]
                @if ($todo['status'])
                    line-through font-normal
                @endif
                ">
                {{ $todo['task'] }}
            </div>

            <div class="flex flex-row space-x-3">
                <div class="@if ($todo['status'])
                            text-green-600
                            @else
                            text-red-600
                            @endif">
                    {{ $todo['status']? 'Feito':'Incompleto' }}
                </div>
                <div>
                    <button wire:click='deleteTask({{ $index }})' wire:confirm='Deseja remover esta tarefa?'><i
                            class="fa-solid fa-trash fa-lg"></i></button>
                </div>

                <div>
                    <input type="checkbox" wire:change="statusChanged({{ $index }}, $event.target.checked)"
                        class="p-1 w-6 h-6" @if ($todo['status']) checked @endif>
                </div>


            </div>
        </div>
        @endforeach
    </div>

</div>
