@extends('layouts.viewdata')

@section('content')
    <div class="mt-4">
        <h1>Edit Post</h1>
        {!! Form::open(['action'=>['PostsController@store',$v->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Post Title')}}
            {{Form::text('txt_title','{{$v->title}}',['placeholder'=>'Enter title','class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('detail','Post Detail')}}
            {{Form::textarea('txt_detail','{{$v->detail}}',['id'=>'article-ckeditor','placeholder'=>'Enter post detail','class'=>'form-control'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Create Post',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>    
@endsection