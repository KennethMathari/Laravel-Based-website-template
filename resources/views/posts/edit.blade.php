@extends('layouts.app')

@section('content')
 <h1>Edit Post</h1>
 {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title','Title:')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Enter Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body','Body:')}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Enter Body'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}

@endsection