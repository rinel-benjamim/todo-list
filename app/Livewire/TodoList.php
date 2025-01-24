<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todo = '';
    public $todos = [];

    public function add()
    {

        $this->todos[] = ['task' => $this->todo, 'status' => false];
        $this->todo = '';
    }

    public function statusChanged($key, $isChecked)
    {
        $this->todos[$key]['status'] = $isChecked;
    }

    public function deleteTask($key){
        unset($this->todos[$key]);
        
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
