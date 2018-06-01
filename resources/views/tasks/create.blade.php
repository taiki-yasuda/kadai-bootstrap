@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>Create Tasks</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('send') !!}

    {!! Form::close() !!}

@endsection