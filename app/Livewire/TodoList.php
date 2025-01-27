<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todo = '';
    public $todos = [];
    public $pendingTasks = 0;
    public $completedTasks = 0;

    public function add()
    {

        $this->todos[] = ['task' => $this->todo, 'status' => false];
        $this->checkTasksStatus();
        $this->todo = '';
    }

    public function statusChanged($key, $isChecked)
    {
        $this->todos[$key]['status'] = $isChecked;
        $this->checkTasksStatus();
    }

    public function deleteTask($key)
    {
        unset($this->todos[$key]);
        $this->checkTasksStatus();
    }

    private function checkTasksStatus()
    {
        $this->completedTasks = 0;
        $this->pendingTasks = 0;
        foreach ($this->todos as $todo) {
            if ($todo['status']) {
                $this->completedTasks += 1;
            } else {
                $this->pendingTasks += 1;
            }
        }
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
