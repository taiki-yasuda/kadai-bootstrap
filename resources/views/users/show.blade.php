@extends('layouts.app')

@section('content')
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
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">TimeLine <span class="badge">{{ $count_tasks }}</span></a></li>
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
@endsection