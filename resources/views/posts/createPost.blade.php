@extends('layouts.viewdata')

@section('content')
    <div class="mt-4">
        <h1>Create New Post</h1>
        {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Post Title')}}
            {{Form::text('txt_title','',['placeholder'=>'Enter title','class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('detail','Post Detail')}}
            {{Form::textarea('txt_detail','',['id'=>'article-ckeditor','placeholder'=>'Enter post detail','class'=>'form-control'])}}
        </div>
        {{Form::submit('Create Post',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>    
@endsection