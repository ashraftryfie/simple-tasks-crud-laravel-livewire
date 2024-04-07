<?php

namespace App\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class AppTasks extends Component
{

    public function render(): Renderable
    {
        $authUserTasks = auth()->user()->tasks();
        $totalTasks = $authUserTasks->count();
        $tasks = $authUserTasks->latest(5)->get();
        return view('livewire.app-tasks', [
            'totalTasks' => $totalTasks,
            'tasks' => $tasks
        ]);
    }
}
