@extends('main')

<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')
  <style>
    body{
      background: url("../images/backgrounds/oct2.jpg");
      background-position: center;
      background-size: cover;
    }
  </style>

  <!--Add music-->
	<script>
	function myFunction() {
	  var x = document.getElementById("myAudio").autoplay;
	  document.getElementById("demo").innerHTML = x;
	}
	</script>
	<p id="demo"></p>
  	<audio id="myAudio" controls autoplay>
	  <source src="../audio/medieval.mp3" type="audio/mpeg">
	  Your browser does not support the audio element.
	</audio>



	<div class="row"  id="textpost">
			@if(!empty($post->image))
				<img src="{{asset('/images/creatures/' . $post->image)}}" class="imgpost" />
			@endif
			<h1>{{ $post->title }}</h1>
			<p>{!! $post->body !!}</p>
			<br>
			<div class="tags">Tags: 
				@foreach ($post->tags as $tag)
					<a class="tagName" href="{{ route('tags.show', $tag->id) }}">
					<span class="label label-default">{{ $tag->name }}</span></a>
				@endforeach
			</div>
			<br><br>
			<p>Posted In: {{ $post->category->name }}</p>
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comments()->count() }} Comments</h3>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">

						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image">
						<div class="author-name">
							<h4>{{ $comment->name }}</h4>
							<p class="author-time">{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
						</div>

					</div>

					<div class="comment-content">
						{{ $comment->comment }}
					</div>

				</div>
			@endforeach
		</div>
	</div>

	<div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
			{{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name', "Name:") }}
						{{ Form::text('name', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-6">
						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-12">
						{{ Form::label('comment', "Comment:") }}
						{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

						{{ Form::submit('Add Comment', ['id'=>"submitButton",'class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
					</div>
				</div>

			{{ Form::close() }}
		</div>
	</div>

@endsection
