@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>Task Lists</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
              <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} の {{ $task->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create', 'Add new tasks') !!}

@endsection