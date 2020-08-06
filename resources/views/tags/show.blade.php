@extends('main')

@section('title', "| $tag->name Tag")

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('tags.edit', $tag->id) }}" id="editButton" class="btn btn-primary pull-right btn-block" style="margin-top:20px;">Edit</a>
		</div>
		<div class="col-md-2">
			{{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
				{{ Form::submit('Delete', ['id'=>'deleteButton', 'class' => 'btn btn-danger btn-block', 'style' => 'margin-top:20px;']) }}
			{{ Form::close() }}
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th>Tags</th>
						<th>Post</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($tag->posts as $post)
					<tr>
						<td>
							<a href="{{ url('blog/'.$post->slug) }}" style="color: white;">
								{{ $post->title }}
							</a>
							</td>
						<td>
							@foreach ($post->tags as $tag)
							<a class="tagName" href="{{ route('tags.show', $tag->id) }}">
								<span class="label label-default">{{ $tag->name }}</span>
							</a>
							@endforeach
						</td>
						<td><a href="{{ route('posts.show', $post->id ) }}" class="btn btn-default btn-m">View</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection