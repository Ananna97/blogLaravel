@if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
	@extends('main')

	@section('title', "| Edit Category")

	@section('content')
		
		{{ Form::model($category, ['route' => ['categories.update', $category->id], 'method' => "PUT"]) }}
			
			{{ Form::label('name', "Title:") }}
			{{ Form::text('name', null, ['class' => 'form-control']) }}

			{{ Form::label('description', "Description:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('description', null, ['class' => 'form-control']) }}

			{{ Form::submit('Save Changes', ['id'=>"submitButton",'class' => 'btn btn-success', 'style' => 'margin-top:20px;', 'id' => "submitButton"]) }}
		{{ Form::close() }}

	@endsection
@else
<meta http-equiv="refresh" content="0; url=/home">
@endif