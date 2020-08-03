@extends('main')

@section('title', '| View category')

@section('content')


	<div class="row"  id="textpost">
		<div class="col-md-8">

			<h1>{{ $category->name }}</h1>
			
			<p class="lead">{!! $category->description !!}</p>

			<hr>

			<div id="backend-posts" style="margin-top: 50px;">
				<h3>Posts:   <small>{{ $category->posts()->count() }} total</small></h3>

				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th></th>
							<th>Actions</th>
							<th width="70px"></th>
						</tr>
					</thead>

					<tbody>
						@foreach ($category->posts as $post)
						<tr  style="border: 0">
							<td>{{ $post->title }}</td>
							<td>
								<a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary"  id="submitButton">View Post</a>
							</td>
							<td>
								<div class="col-sm-6">
									{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('id'=>"editButton",'class' => 'btn btn-primary btn-block')) !!}
								</div>
								<div class="col-sm-6">
									{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

									{!! Form::submit('Delete', ['id'=>"deleteButton", 'class' => 'btn btn-danger btn-block']) !!}

									{!! Form::close() !!}
								</div>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a style="color:white" href="{{ route('blog.single', $category->id) }}">{{ route('blog.single', $category->id) }}</a></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Category:</label>
					<p>{{ $category->name }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($category->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($category->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-md-12">
						{!! Html::linkRoute('categories.edit', 'Edit', array($category->id), array('id'=>"editButton",'class' => 'btn btn-primary btn-block')) !!}
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('categories.index', '<< See All categories', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection