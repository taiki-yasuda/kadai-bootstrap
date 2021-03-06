@extends('layouts.app')

@section('content')


<!-- Write content for each page here -->
<h1>Create new tasks</h1>

@if(Auth::check())

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('status', 'task:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'content:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
        
            {!! Form::close() !!}
        </div>
        
      @else
      {{print "<img src=http://pngimg.com/imgs/cars/sign_stop/>"}}
       @endif 
    </div>
@endsection