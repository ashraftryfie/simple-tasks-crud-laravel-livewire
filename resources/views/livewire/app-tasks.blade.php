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
                    <a class="btn-sm btn-primary" href="#">Update</a>
                    <a class="btn-sm btn-danger" href="#">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
