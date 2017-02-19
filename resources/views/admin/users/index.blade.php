@extends('admin.master')

@section('content')
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="admin-wrapper">
					<table class="table table-bordered table-stripped table-condensed table-responsive">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
								<tr>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>
										<a href="{{ route('users.update', $user->id) }}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="{{ route('users.destroy', $user->id) }}" class="btn btn-default btn-xs"><i class="fa fa-eraser"></i> Delete</a>
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