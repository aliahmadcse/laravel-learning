@extends('layouts.viewdata')

@section('content')
    <h1>Blog Posts</h1>
    @if (@count($var)>0)
        @foreach ($var as $v)    
            <div class="card mt-4">
                <h3><a href="./posts/{{$v->id}}">{{$v->title}}</a></h3>
                <small>Created On {{$v->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts found in your blog</p>
    @endif
@endsection