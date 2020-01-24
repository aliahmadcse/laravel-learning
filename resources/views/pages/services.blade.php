@extends('layouts.viewdata')

@section('content')
    <h1>{{$data['title']}}</h1>
    @if(@count($data['services']>0))
        <ul>
            @foreach ($data['services'] as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    @endif
@endsection