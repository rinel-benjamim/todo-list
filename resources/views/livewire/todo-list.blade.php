<div>

    <form wire:submit='add'>

        <input type="text" maxlength="25" wire:model.live='todo'>
        <button type="submit">Add</button>
    </form>

    {{$todo}}

    <div>

        @foreach ($todos as $todo)

        {{ $todo['task'] }}

        {{ $todo['status'] }}

        @endforeach

    </div>
</div>
