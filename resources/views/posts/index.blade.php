

@extends('layouts.app')
@section('content')
    <div class="container">
        <ul>
            @foreach($posts as $post)

                <li><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>
                <li>{{$post->body}}</li>
                <li>{{\Carbon\Carbon::parse($post->published_at)->diffForHumans()}}</li>
                <li>{{$post->author->name}}</li>
                <hr/>

            @endforeach

        </ul>
        <div class="text-warning text-center" >{{$posts->links()}}</div>
    </div>

@endsection


