<div>
    <h3 class="text-center">
        Add New Task
    </h3>

    <div class="form-group">
        <label for="title-input">Task Title</label>
        <input type="text" name="title" wire:model="title" id="title-input" placeholder="Enter task title" class="form-control">
    </div>

    <div class="form-group">
        <button wire:click.prevent="addTask" type="submit" class="btn btn-primary btn-block">
            Add
        </button>
    </div>
</div>
