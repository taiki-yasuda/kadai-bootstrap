@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>No.{{ $task->id }} tasks details</h1>

<table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>task</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>content</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>


   {!! link_to_route('tasks.edit', 'Edit this message', ['id' => $task->id], ['class' => 'btn btn-default']) !!}

<br><br>

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection