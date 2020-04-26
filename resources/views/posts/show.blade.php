@extends('main')

@section('title', '| View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			
			<p class="lead">{!! $post->body !!}</p>

			<hr>

			<dl class="dl-horizontal">
				<label>Created At:</label>
				<p>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</p>
			</dl>

			<dl class="dl-horizontal">
				<label>Last Updated:</label>
				<p>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</p>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
				</div>
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
				</div>
			</div>
		</div>
	</div>
@endsection