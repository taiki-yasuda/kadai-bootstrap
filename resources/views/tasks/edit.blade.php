@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>Edit No.{{ $task->id }}</h1>


  <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'task:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'content:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('update', ['class' => 'btn btn-primary btn-sm']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection