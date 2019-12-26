@extends('layouts.app')

@section('content')
    <a href="http://localhost/Laravel/getting-started/public/posts" class = "btn btn-dark">Go Back</a>
    <br>
    <h1>{{$post->title}}</h1>

    <div>
        {{$post->body}}
    </div>
    <hr/>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="http://localhost/Laravel/getting-started/public/posts/{{$post->id}}/edit" class="btn btn-dark"> Edit </a>

            {!! Form::open(['action' => ['PostController@destroy',$post->id],'method' => 'POST','class'=>'pull-right']) !!}
                {{ Form::hidden('_method','DELETE') }}
                {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif
    @endif
@endsection
