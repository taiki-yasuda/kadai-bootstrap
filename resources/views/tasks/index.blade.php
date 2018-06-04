@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>Task Lists</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><span class="label label-success">No</span></th>
                    <th><span class="label label-success">task</span></th>
                    <th><span class="label label-success">content</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create', 'Add new tasks', null, ['class' => 'btn btn-primary']) !!}

@endsection