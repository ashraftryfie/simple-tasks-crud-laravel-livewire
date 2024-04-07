@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-4">
                <h3 class="text-center">Add New Task</h3>
                <form action="{{ route('task.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </div>
                </form>
            </div>

            <div class="col-md-8 p-4">
                @livewire('app-tasks')
            </div>
        </div>
    </div>
@endsection
