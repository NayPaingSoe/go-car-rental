@extends('backend.master')
@section('content')

<div class="mb-3">
	<span class="h3 text-gray-800">Create Subcategory</span><a href="{{ route('city.index') }}"class="btn btn-primary float-right">Lists</a>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"> City Form</h6>
	</div>
	<div class="card-body">
	{{--	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif   --}}
	<form action="{{route('city.update',$city->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
		@method('PUT')
			<div class="form-group row">
				<label for="division" class="col-sm-2 col-form-label">City</label>
				<div class="col-sm-10">
					<select class="form-control" name="division" id="division">
     						@foreach($divisions as $row)
							<option value="{{$row->id}}"

							
   <?php   if ($row->id==$city->division_id) {
      ?>
      selected="selected";
					<?php } ?>>
						{{$row->name}}
					</option>
					@endforeach
					</select>
					<!-- <input type="file" name="image"> -->
				</div>
			</div>
			<div class="form-group row">
				<label for="categoryName" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" id="categoryName" value="{{$city->name}}">
				</div>
			</div>

			
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary">
					<i class="fa fa-save"></i> Update
				</button>
			</div>
			
		</form>
	</div>
</div>

@endsection