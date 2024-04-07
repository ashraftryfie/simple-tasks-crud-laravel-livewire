<?php

namespace App\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Livewire\WithPagination;

class AppTasks extends Component
{
    protected $listeners = [
        'taskAdded' => '$refresh',
        'taskDeleted' => '$refresh',
    ]; // Listen for add task event

    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    public function render(): Renderable
    {
        $authUserTasks = auth()->user()->tasks();
        $totalTasks = $authUserTasks->count();
        $tasks = $authUserTasks->latest()->paginate(5);
        return view('livewire.app-tasks', [
            'totalTasks' => $totalTasks,
            'tasks' => $tasks
        ]);
    }

    public function deleteTask($taskId): void
    {
        $task = auth()->user()->tasks()->find($taskId);

        if ($task) {
            $task->delete();
            // call the listeners for this operation
            $this->dispatch('taskDeleted');
        }
    }
}
