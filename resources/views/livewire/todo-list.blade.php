<div class="container">

    <div class="mt-20 mb-2">
        <p class="text-xl font-bold text-center">Todos</p>
    </div>
    <div class="flex justify-center">

        <input type="text" wire:model.live='todo' class="rounded-l-lg p-1 text-black">
        <button wire:click='add' class="rounded-r-lg bg-white text-[#141414] px-2 font-light border-l-2">Add</button>
    </div>
    {{$todo}}


    <table class="table table-auto">
        <tr class="table-header-group">
            <td class="table-column">Task</td>
            <td class="table-column">Status</td>
        </tr>

        @foreach ($todos as $todo)

        

        <tr class="row">
            <td class="col">{{ $todo['task'] }}</td>
            <td class="col">{{ $todo['status'] }}</td>
        </tr>
        @endforeach

    </table>
</div>
