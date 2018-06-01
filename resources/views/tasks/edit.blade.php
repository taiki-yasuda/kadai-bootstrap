@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>Edit No.{{ $task->id }}</h1>


    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}


        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('edit') !!}

    {!! Form::close() !!}

@endsection