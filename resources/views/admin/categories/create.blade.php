@extends('admin.master')

@section('content')
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="admin-wrapper">
					<form action="{{ route('categories.store') }}" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Category name">
						</div>
						<div class="form-group">
							<label for="parent">Parent</label>
							<select name="parent" id="parent" class="form-control">
								<option value="0"> - Select -</option>
								@foreach($categories as $category)
									<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="parent">Description</label>
							<input type="text" name="description" id="description" class="form-control" placeholder="Description">
						</div>
						<div class="form-group">
							<label for="">Icon</label>
							<input type="file">
						</div>
						<div class="form-group">
							<span class="pull-right">
								<a href="{{ route('categories.index') }}" class="btn btn-default">Cancel</a>
								<input type="submit" class="btn btn-primary" value="Save">
							</span>
						</div>
						<div class="clearfix"></div>
					</form>				
				</div>				
			</div>
		</div>	
	</div>
@endsection