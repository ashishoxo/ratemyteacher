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
					<th>Topic</th>
					<th>Subject</th>
					<th>Date</th>
					<th>Time</th>
					<th>teacher</th>
					<th>company</th>
				</tr>
			</thead>
			<tbody>
				@foreach($schedules as $key => $value)
				<tr>
					<td>{{$value->schedule_type}}</td>
					@foreach($value->meta as $key => $value)
						<td>{{$value->value}}</td>
					@endforeach
				</tr>
				@endforeach
			</tbody>
        </table>
    </div>
</div>
@endsection