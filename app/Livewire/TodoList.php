<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todo = '';
    public $todos = [];

    public function add()
    {
        if (!empty($this->todo)) {
            $this->todos[] = ['task' => $this->todo, 'status' => false];
            $this->todo = '';
        }
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

}
