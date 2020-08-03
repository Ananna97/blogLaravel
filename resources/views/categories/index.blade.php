@extends('main')

@section('title', '| All Categories')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($categories as $category)
					<tr>
						<td>
							<a class="tagName" href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
						</td>

						<td>
							{{ substr(strip_tags($category->description), 0, 50) }}{{ strlen(strip_tags($category->description)) > 50 ? "..." : "" }}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
					<h2>New Category</h2>
					{{ Form::label('name', 'Name:') }}
					{{ Form::text('name', null, ['class' => 'form-control']) }}


					{{ Form::label('description', 'Description:') }}
					{{ Form::text('description', null, ['class' => 'form-control']) }}

					{{ Form::submit('Create New Category', ['id'=>"submitButton", 'class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection