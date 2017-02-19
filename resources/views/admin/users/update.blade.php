@extends('admin.master')

@section('content')

	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="admin-wrapper">
					<form action="">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" class="form-control" placeholder="Username" value="{{ $user->name }}">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
						</div>
						<div class="form-group">
							<span class="pull-right">
								<a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
								<input type="submit" class="btn btn-primary" value="Save">
							</span>
							<div class="clearfix"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection