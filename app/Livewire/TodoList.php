<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todo = '';
    public $todos = [];
    private $c = 0;

    public function add()
    {
        $this->todos[$this->c]['todo'] = $this->todo;
        $this->todos[$this->c]['status'] = 'pending';

        $this->todo = '';
        $this->c++;
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
