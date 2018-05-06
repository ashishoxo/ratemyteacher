@extends('layouts.student')
@section('content')
	<div class="dashboard-list-box margin-top-0">
	<h4>Lectures</h4>
	<ul>
		@foreach($lectures as $key => $values)
		<li>
			
			<div class="list-box-listing">
				
				<div class="list-box-listing-content">
					<div class="inner">
						@foreach($values->meta as $key => $value)
							<span style="margin-right: 20px;">{{$value->value}}</span>
						@endforeach
					</div>
				</div>
			</div>
			<div class="buttons-to-right">
				<a href="{{route('lecture.rate',$values->id)}}" class="button gray"><i class="sl sl-icon-note"></i> Rate</a>
				{{-- <a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a> --}}
			</div>

			
		</li>
		@endforeach
		
	</ul>
</div>
@endsection