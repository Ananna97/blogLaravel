@extends('main')

@section('title', '| Search Posts')

@section('content')
  <style>
    body{
      background: url("../images/backgrounds/oct5.jpg");
      background-position: center;
      background-size: cover;
    }
  </style>
	
	
<?php if($posts->count()) : ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Search Results</h1>
    		<p class="search-results-count">{{ $posts->total() }} Result(s) for '{{ request()->input('query') }}'</p>
		</div>
	</div>


	<?php foreach ($posts as $post) : ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>{{ $post->title }}</h2>
			<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

			<p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>

			<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary"  id="submitButton">Read More</a>
			<hr>
		</div>
	</div>

    <?php endforeach ?>


	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{{ $posts->appends(request()->input())->links() }}
			</div>
		</div>
	</div>
<?php else : ?>
  <p>There are no results for '{{ request()->input('query') }}'</p>
<?php endif ?>


@endsection
