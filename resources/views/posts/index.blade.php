@extends('layouts.app')

@section('content')
    <a href="{{route('userposts.create')}}" class="btn btn-primary">Create</a>
    <table class="table table-bordered">
        <tr>
            <td>Post title</td>
            <td>user</td>
            <td>Controls</td>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->user->email}}</td>
                <td>
                    <a href="{{route('userposts.edit', ['post_id' => $post->id])}}" class="btn-default">Edit</a>
                    <a href="{{route('userposts.delete', ['post_id' => $post->id])}}" class="btn-danger">delete</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection