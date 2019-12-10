@extends('layouts.app')

@section('content')
<h1>{{$post->title}}</h1>
<small>Published on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>

<p>{!!$post->body!!}</p>

<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
{!!Form::close()!!}

@endsection