@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center text-warning">新增文章</h3>
        <form action="{{ route('posts.store') }}" method="post">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{csrf_field()}}
            <div class="form-group">
                <label for="title" class="control-label">标题：</label>
                <input type="text" id='title' name='title' class="form-control" value="">
            </div>

            <div class="form-group">
                <label for="body" class="control-label">内容：</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="published_at" class="control-label">发布日期：</label>
                <input type="date" name="published_at" id="published_at" class="form-control" value="{{ date('Y-m-d') }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">确认新增</button>
            </div>
        </form>
    </div>

@endsection