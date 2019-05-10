@extends('layouts.app')
@section('content')
<div class="container" style="margin-bottom:50px;">
<h1><b>Создать Hовость</b></h1>
{!! Form::open(['action' => 'PostsController@store','method'=>'POST', 'enctype' =>'multipart/form-data']) !!}
   <div class="form-group">
   	{{Form::label('title', 'Заглавие')}}
   	{{Form::text('title', '',['class'=>'form-control', 'placeholder'=>'Заглавие'])}}
   </div>
   <div class="form-group">
   	{{Form::label('body', 'Текст')}}
   	{{Form::textarea('body', '', ['id' => 'article-ckeditor','class'=>'form-control', 'placeholder'=>'Текст'])}}
   </div>
   <div class="form-group">
   	
   	{{Form::file('cover_image')}}
   </div>
   		{{Form::submit('Создать', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection