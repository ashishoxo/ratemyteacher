@extends('layouts.main')
@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            All Departments
        </h4>
        <p class="card-description">
            This list contains all the departments of an institution
        </p>
        <table class="table table-striped">
			<thead>
				<tr>
					<th>Departmets</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($model as $department)
				<tr>
					<td>{{$department->name}}</td>
					<td>
						<a type="button" class="btn btn-secondary btn-fw" href="{{route('teacher.edit',[$department->id])}}"><i class="mdi mdi-cloud-download"></i>Edit</a>
                        <a type="button" class="btn btn-danger btn-fw"><i class="mdi mdi-cloud-download"></i>Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
        </table>
    </div>
</div>
@endsection
