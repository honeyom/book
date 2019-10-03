@extends('layouts.app')
@section('content')
    <div class="container">
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <span class="pull-left">{{$post->author->name}}</span>
            <span class="pull-right">{{$post->published_at}}</span>
        <div class="clearfix"></div>

        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-danger pull-left">编辑内容</a>
        <div class="pull-right">
            <form action="{{route('posts.destroy',$post->id)}}" method="post">
                <input type="hidden" name="_method" value='DELETE'>
                {{csrf_field()}}
                <div class="pull-right">
                <button type="submit" class="btn btn-primary">删除内容</button>
                </div>
            </form>
        </div>
    </div>

    @endsection