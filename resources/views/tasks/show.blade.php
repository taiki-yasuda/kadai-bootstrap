@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>No.{{ $task->id }} tasks details</h1>

    <p>status: {{ $task->status }}</p>
    <p>task: {{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'edit this task', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('delete') !!}
    {!! Form::close() !!}

@endsection