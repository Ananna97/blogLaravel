@if(\Illuminate\Support\Facades\Auth::guard('admin')->check())

	@extends('main')

	@section('title', "| Edit Tag")

	@section('content')
		
		{{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => "PUT"]) }}
			
			{{ Form::label('name', "Title:") }}
			{{ Form::text('name', null, ['class' => 'form-control']) }}

			{{ Form::submit('Save Changes', ['id'=>"submitButton",'class' => 'btn btn-success', 'style' => 'margin-top:20px;', 'id' => "submitButton"]) }}
		{{ Form::close() }}

	@endsection
@else
<meta http-equiv="refresh" content="0; url=/home">
@endif