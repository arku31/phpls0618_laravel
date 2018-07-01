@extends('layouts.app')

@section('content')
    <form action="{{route('userposts.store')}}" method="post">
        {{csrf_field()}}
        <label for="">
            <input type="text" name="title">
        </label>
        <label for="">
            <input type="text" name="content">
        </label>

        <label for="">
            <input type="submit">
        </label>
    </form>
@endsection