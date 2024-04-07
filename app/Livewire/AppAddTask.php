<?php

namespace App\Livewire;

use App\Enums\TaskStatus;
use Livewire\Component;

class AppAddTask extends Component
{
    public string $title;

    public function render()
    {
        return view('livewire.app-add-task');
    }

    public function addTask(): void
    {
        $newTask = auth()->user()->tasks()->create([
            'title' => $this->title,
            'status' => TaskStatus::PENDING,
        ]);

        $this->title = "";
    }
}
