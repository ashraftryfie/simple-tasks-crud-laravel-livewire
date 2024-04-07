<div>
    <h3 class="text-center">My Tasks ({{$totalTasks}})</h3>

    <table class="table bg-white ">
        <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->status }}</td>
                <td>
                    <button class="btn-sm btn-primary" href="#">Update</button>
                    <button class="btn-sm btn-danger" wire:click="deleteTask({{ $task->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $tasks->links()}}
</div>
