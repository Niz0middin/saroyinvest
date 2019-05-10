@extends('layouts.app')
@section('content')
<div class="container">
<h1>Изменить Hовость</h1>
{!! Form::open(['action' => ['PostsController@update', $post->id],'method'=>'POST', 'enctype' =>'multipart/form-data']) !!}
   <div class="form-group">
   	{{Form::label('title', 'Заглавие')}}
   	{{Form::text('title', $post->title,['class'=>'form-control', 'placeholder'=>'Заглавие'])}}
   </div>
   <div class="form-group">
   	{{Form::label('body', 'Текст')}}
   	{{Form::textarea('body', $post->body,['id' => 'article-ckeditor','class'=>'form-control', 'placeholder'=>'Текст'])}}
   </div>
     <div class="form-group">
      {{Form::file('cover_image')}}
   </div>
   {{Form::hidden('_method','PUT')}}
   		{{Form::submit('Изменить', ['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
</div>
@endsection