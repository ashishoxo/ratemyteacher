@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            All Teachers
        </h4>
        <p class="card-description">
            This list contains all the teachers of an institution
        </p>
        <table class="table table-striped">
			<thead>
				<tr>
					<th>Schedule type</th>
					<th>Date</th>
					<th>Topic</th>
					<th>Subject</th>
					<th>Time</th>
					<th>teacher/company</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($schedules as $key => $values)
				<tr>
					<td>{{$values->schedule_type}}</td>
					<td>{{$values->date}}</td>
					@foreach($values->meta as $key => $value)
						@if($value->value != "" && $value->value != null)
							<td>{{$value->value}}</td>
						@endif
					@endforeach
					<td>
						<a href="{{route('schedule.delete',$values->id)}}">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
        </table>
    </div>
</div>
@endsection