<div>
    <main class="bg-white m-7 pb-12 pt-2 rounded-lg shadow-md">

        <div>
            <h1 class="text-center mt-6 mb-1 font-bold text-3xl">Livewire Todo List</h1>
        </div>

        <form wire:submit.prevent='add' class="mb-2">
            <div class="text-center">
                <input type="text" placeholder="Add your task..." wire:model.defer='todo'
                    class="bg-[#f1f0f0] p-2 outline-none rounded-l-xl w-96 shadow-sm">
                <input type="submit" class="bg-green-500 py-2 rounded-r-lg px-4 m-[-4px] text-white" value="Add">
            </div>
        </form>



        <div class="container lg:px-24 flex flex-col mt-7">
            <div class="container flex flex-row justify-around text-white">

                <div class="flex flex-col justify-around text-center w-40 h-28 p-3 rounded-md bg-orange-500 shadow-lg">
                    <div>
                        <h2 class="font-semibold">Tasks</h2>
                    </div>
                    <div>
                        <p class="font-bold text-5xl">{{ count($todos) }}</p>
                    </div>
                </div>

                <div class="flex flex-col justify-around text-center w-40 h-28 p-3 rounded-md bg-red-500 shadow-lg">
                    <div>
                        <h2 class="font-semibold">Pending</h2>
                    </div>
                    <div>
                        <p class="font-bold text-5xl">{{ $pendingTasks }}</p>
                    </div>
                </div>

                <div class="flex flex-col justify-around text-center w-40 h-28 p-3 rounded-md bg-green-500 shadow-lg">
                    <div>
                        <h2 class="font-semibold">Completed</h2>
                    </div>
                    <div>
                        <p class="font-bold text-5xl">{{ $completedTasks }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                @foreach ($todos as $index => $todo)
                <div wire:key='todo-{{$index}}'
                    class="flex flex-row bg-[#f1f0f0] p-3 my-3 mx-24 justify-between rounded-lg items-center shadow-md hover:bg-[#ececec]">

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
                            {{ $todo['status']? 'Done':'Pending' }}
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

        @if (count($todos) == 0)
        <div class="mx-52 my-10">
            <div class="flex flex-row">
                <div>
                    <img height="200px" width="200px"
                        src="https://github.com/user-attachments/assets/e70866d0-9a92-4c88-868a-8fab2cf21b44" alt=""
                        srcset="">
                </div>
                <div></div>
            </div>
        </div>
        @endif

    </main>
</div>
