@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ route('todo.update', $task->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <input class="form-control" name="title" value="{{ $task->title }}"
                 type="text" placeholder="Enter Task" required>
            </div>
        </div>
    <div class="col-lg-4">
        <button type="submit" class="btn btn-success">Update</button>
    </div>
    </div>
</form>
</div>

@endsection