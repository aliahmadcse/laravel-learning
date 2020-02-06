@extends('layouts.viewdata')

@section('content')
    <div class="card">
        <h1>{{$v->title}}</h1>
        <p>{{$v->detail}}</p>
    </div>
    <small>{{$v->created_at}}</small>
    <a href="{{url('posts/'$v->id'/edit')}}">Edit</a>

@endsection