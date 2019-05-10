@extends('headfooter')
@section('content')
<div style="margin-top:150px;" class="container">
  <div class="row animate-box">
    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2 id="news">Новости</h2>
    </div>
</div>
@if(count($posts)>0)
@foreach($posts as $post)
<div class="jumbotron" style="background-color:white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
	<div class="row">
		<div class="col-md-4 col-sm-4">
			<img width="100%" src="/saroy/public/storage/cover_images/{{$post->cover_image}}">
		</div>
		<div style="margin-top:20px;" class="container">
		<div class="col-md-8 col-sm-8">
			<h3><a href="posts/{{$post->id}}"><b>{{$post->title}}<b/></a></h3>
	<small>Дата: {{date('j.m.Y',strtotime($post->created_at))}}</small>
	<p>{!! substr($post->body, 0, 300) !!}{!! strlen($post->body) >= 300 ? "..." : "" !!}</p>
		</div>
	</div>
	</div>
</div>

@endforeach
{{$posts->links()}}
@else
<p>No posts found</p>
@endif
</div>
@endsection
