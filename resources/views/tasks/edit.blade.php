@extends('layouts.app')

@section('content')


@if (Auth::check())

<!-- Write content for each page here -->
<h1>Edit No.{{ $task->id }}</h1>


  <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'task:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('update', ['class' => 'btn btn-primary btn-sm']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@else
        <div class="center jumbotron">
          <div class="text-center">
             <h1>Welcome to the Tasklists</h1>
             {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-success']) !!}
          </div>
        </div>
@endif


@endsection