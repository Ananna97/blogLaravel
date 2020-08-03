@extends('main')

@section('title', '| Blog')

@section('content')

  <style>
    body{
      background: url("../images/backgrounds/oct6.png");
      background-position: center;
      background-size: cover;
    }
  </style>


	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Octarine - Posts</h1>
		</div>
	</div>

	@foreach ($posts as $post)
	<div class="row" style="width: 150%; margin-left: -20%">
		<div class="col-md-8 col-md-offset-2">
			<div class="column-66">
			<h2>{{ $post->title }}</h2>
			<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

			<p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>

			<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary"  id="submitButton">Read More</a>
			
	    </div>
	    <div class="column-33">
		@if(!empty($post->image))
			<img src="{{asset('images/creatures/' . $post->image)}}" alt="This is a photo." class="blogPostIMG"  />
	    @endif
	    </div>
		</div>
	</div>
	@endforeach

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $posts->links() !!}
			</div>
		</div>
	</div>


@endsection
