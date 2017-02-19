@extends('admin.master')

@section('content')
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="admin-wrapper">
					<span class="pull-right">
						<a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Category</a>
					</span>
					<div class="clearfix"></div>
					<table class="table table-responsive table-bordered-table-striped table-condensed">
						<thead>
							<tr>
								<th>Name</th>
								<th>Slug</th>
								<th>Icon</th>
								<th>Parent</th>
								<th>Description</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $category)
								<tr>
									<td>{{ $category->name }}</td>
									<td>{{ $category->slug }}</td>
									<td>{{ $category->icon }}</td>
									<td>{{ $category->parentitem['name'] }}</td>
									<td>{{ $category->description }}</td>
									<td>
										<a href="" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-default btn-xs"><i class="fa fa-close"></i> Delete</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>					
				</div>				
			</div>
		</div>	
	</div>
@endsection