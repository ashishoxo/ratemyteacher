@extends('layouts.student')
@section('content')
	
	<div>
		@foreach($model->meta as $key => $value)
		<div>
			{{$value->key}}		
		</div>
		<div>
			{{$value->value}}
		</div>
		@endforeach
	</div>

	<div>
		
		{!! Form::open(['route'=>['lecture.saverate','id'=>request()->route()->parameters()['id']],'method'=>'post']) !!}
		{!! csrf_field() !!}
			comment
			<textarea name="comment"></textarea>
			rating
			<select name="rating">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<input type="hidden" name="user" value="{{Auth::user()->name}}">
			<button>Submit</button>
		{!! Form::close() !!}
	</div>
	<div>

		comments are:
		@foreach($model->reviews as $key => $value)
		<div>
			{{$value->comment}}		
		</div>

		<div>
			{{$value->rating}}
		</div>
		@endforeach
	</div>
@endsection