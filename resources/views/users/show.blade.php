@extends('layouts.app')

@section('content')

@if(Auth::check())
    <div class="row">
        <aside class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
        
        <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">TimeLine <span class="label label-success">{{ $count_tasks }}<span class="glyphicon glyphicon-pencil"></span></span></a></li>
                <li><a href="#">Followings</a></li>
                <li><a href="#">Followers</a></li>
            </ul>
            @if (Auth::user()->id == $user->id)
                  {!! Form::open(['route' => 'tasks.store']) !!}
                      <div class="form-group">
                          <br><label class="col-xs-6 control-label">status</label>
                          {!! Form::textarea('status', old('status'), ['class' => 'form-control', 'placeholder' => "Write status", 'rows' => '1']) !!}
                          
                          <br><label class="col-xs-6 control-label">task</label>
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'placeholder' => "Write task", 'rows' => '2']) !!}
                          
                          <br>{!! Form::submit('Post', ['class' => 'btn btn-primary btn-block active']) !!}<br>
                      </div>
                  {!! Form::close() !!}
            @endif
            
            @if (count($tasks) > 0)
                @include('tasks.tasks', ['tasks' => $tasks])
            @endif
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