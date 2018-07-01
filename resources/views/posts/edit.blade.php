@extends('layouts.app')

@section('content')
    <form action="{{route('userposts.update', ['post_id' => $post->id])}}" method="post">
        {{csrf_field()}}
        <label for="">
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <label for="">
            <input type="text" name="content" value="{{$post->content}}">
        </label>

        <label for="">
            <input type="submit">
        </label>
    </form>
@endsection