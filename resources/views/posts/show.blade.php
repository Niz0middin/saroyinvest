@extends('headfooter')
@section('content')
<div class="container" style="margin-bottom:50px;margin-top:150px;">
<h3><b>{{$post->title}}</b></h3>
<P>{!!$post->body!!}</P>
<small>Дата: {{date('j.m.Y',strtotime($post->created_at))}}</small>
<br>
<img style="max-height:500px; max-width:100%" src="/saroy/public/storage/cover_images/{{$post->cover_image}}">

<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<div style="display:inline-block!important">
    <a href="/saroy/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
</div>
<div style="display:inline-block!important">
    {!!Form::open(['action'=>['PostsController@destroy', $post->id]])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
</div>
@endif
@endif
</div>
@endsection