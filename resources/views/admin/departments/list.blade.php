@extends('layouts.main')
@section('content')

<div class="dashboard-list-box margin-top-0">
	<h4>Departments</h4>
	<ul>
		@foreach($model as $teacher)
		<li>
			<div class="list-box-listing">
				
				<div class="list-box-listing-content">
					<div class="inner">
						<h3><a href="#">{{$teacher->name}}</a></h3>
						<span>{{$teacher->department}}</span>
						
					</div>
				</div>
			</div>
			<div class="buttons-to-right">
				<a href="{{route('teacher.edit',[$teacher->id])}}" class="button gray"><i class="sl sl-icon-note"></i> Edit</a>
				<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
			</div>
		</li>
	@endforeach
		
	</ul>
</div>
	
@endsection