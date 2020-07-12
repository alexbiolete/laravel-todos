@extends('layouts.app')

@section('content')
    <div class="m-b-md">
        <div class="title">
            To-Do List
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <form action="/create" method="post">
                    {{ csrf_field() }}
                    <input type="text" class="form-control input-lg" name="todo" placeholder="Add a new task">
                </form>
            </div>
        </div>
        <hr>
        @foreach ($todos as $todo)
            <div class="element">
                {{ $todo->todo }}
                @if ($todo->completed == 0)
                    <a href="{{ route('todo.complete', ['id' => $todo->id]) }}" class="btn btn-success btn-xs">complete</a>
                @else
                    <span class="badge">completed</span>
                @endif
                <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-default btn-xs">edit</a>
                <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger btn-xs">delete</a>
            </div>
            <hr>
        @endforeach
    </div>
@endsection