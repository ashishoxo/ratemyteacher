@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Add Teacher
        </h4>
        <p class="card-description">
            Add a teacher to an institution
        </p>
        {!! Form::open(['route'=>'teacher.save','enctype'=>'multipart/form-data']) !!} 
		{!! csrf_field() !!}
            <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Name of teacher</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="exampleInputEmail2" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group row">
              	<label class="col-sm-3 col-form-label">Department</label>
              	<div class="col-sm-9">
                	{!! Form::select('department',App\department::getDepartment(),null,['placeholder'=>'Select Department','class'=>'form-control']) !!}
              	</div>
            </div>
            <div class="form-group row">
              	<label class="col-sm-3 col-form-label">Profile Photo</label>
              	{{Form::file('pic')}}
            </div>
            
                    
                  
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            {{-- <button class="btn btn-light">Cancel</button> --}}
{!! Form::close() !!}

        
    </div>
</div>
@endsection
