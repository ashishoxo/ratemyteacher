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
			
			<div class="rating">
				<span data-value="5">☆</span>
				<span data-value="4">☆</span>
				<span data-value="3">☆</span>
				<span data-value="2">☆</span>
				<span data-value="1">☆</span>
			</div>
			<input type="hidden" name="rating" value="">
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
			
			<div class="rating" data-value="">
				<span class="{{ ($value->rating >= 5) ? 'active' : '' }}">☆</span>
				<span class="{{ ($value->rating >= 4) ? 'active' : '' }}">☆</span>
				<span class="{{ ($value->rating >= 3) ? 'active' : '' }}">☆</span>
				<span class="{{ ($value->rating >= 2) ? 'active' : '' }}">☆</span>
				<span class="{{ ($value->rating >= 1) ? 'active' : '' }}">☆</span>
			</div>
		</div>
		@endforeach
		
			
	</div>
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('body').on('click','.rating > span',function(){
				$(this).addClass('active');
				$(this).nextAll().addClass('active');
				$(this).prevAll().removeClass('active');
				$('input[name=rating]').val($(this).data('value'));
			})
		})
	</script>
	<style type="text/css">
		/*#FFC107*/
			.rating {
			  unicode-bidi: bidi-override;
			  direction: rtl;
			  float: left
			}
			.rating > span {
			  display: inline-block;
			  position: relative;
			  width: 1.1em;
			  font-size: 40px;

			}
			.rating > span.active:before{
				content: "\2605";
			   position: absolute;
			   color: #FF9800
			}
			.rating > span:hover:before,
			.rating > span:hover ~ span:before {
			   content: "\2605";
			   position: absolute;
			   color: #FF9800
			}
	
	</style>
@endsection