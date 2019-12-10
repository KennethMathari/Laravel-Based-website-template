@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if(count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                <div class="col-md-4 col-sm-4">
                        <a href="/posts/{{$post->id}}"><img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"></a>
                </div>
                <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Published on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
                </div>        
                </div>   
            </div>
        @endforeach

        {{ $posts->links() }}
    @else
        <p>No posts found</p>
    @endif
@endsection