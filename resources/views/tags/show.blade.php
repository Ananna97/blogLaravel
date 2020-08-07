@extends('main')

@section('title', "| $tag->name Tag")

@section('content')


	<div class="row">
		<div class="col-md-8">
			<h1>{{ $tag->name }} Tag <small style="color: white;">{{ $tag->posts()->count() }} Posts</small></h1>
		</div>

		@if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
		<div class="col-md-2">
			<a href="{{ route('tags.edit', $tag->id) }}" id="editButton" class="btn btn-primary pull-right btn-block" style="margin-top:20px;">Edit</a>
		</div>
		<div class="col-md-2">
			{{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
				{{ Form::submit('Delete', ['id'=>'deleteButton', 'class' => 'btn btn-danger btn-block', 'style' => 'margin-top:20px;']) }}
			{{ Form::close() }}
		</div>
		@endif

	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table" id="tagsTable" style="border-color: transparent; margin-top: 20px">
				<thead style="border-color: transparent;">
					<tr style="border-color: transparent;">
						<th style="border-color: transparent;" style="border-color: transparent; margin-top: 20px">Title</th>
						<th style="border-color: transparent; margin-top: 20px">Tags</th>
						@if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
						<th style="border-color: transparent; margin-top: 20px">Post</th>
						@endif

					</tr>
				</thead>

				<tbody style="border-color: transparent; margin-top: 20px">
					@foreach ($tag->posts as $post)
					<tr style="border-color: transparent; margin-top: 20px">
						<td style="border-color: transparent; margin-top: 20px">
							<a href="{{ url('blog/'.$post->slug) }}" style="color: white;">
								{{ $post->title }}
							</a>
						</td>
						<td style="border-color: transparent; margin-top: 20px">
							@foreach ($post->tags as $tag)
							<a class="tagName" href="{{ route('tags.show', $tag->id) }}">
								<span class="label label-default">{{ $tag->name }}</span>
							</a>
							@endforeach
						</td>

						@if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
						<td style="border-color: transparent; margin-top: 20px">
							<a href="{{ route('posts.show', $post->id ) }}" class="btn btn-default btn-m">View</a>
						</td>
						@endif

					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection