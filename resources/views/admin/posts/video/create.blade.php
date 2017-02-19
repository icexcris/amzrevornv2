@extends('admin.master')

@section('content')
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="admin-wrapper">
					<form action="{{ route('posts.video.store') }}" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control" placeholder="Title">
						</div>
						<div class="form-group">
							<label for="">Video Link</label>
							<input type="text" name="video" class="form-control" placeholder="Video">
						</div>
						<div class="form-group">
							<label for="">Description</label>
							<textarea name="description" id="" class="form-control" cols="30" rows="4"></textarea>
						</div>
						<div class="form-group">
							<label for="">Language</label>
							<select name="lang" id="" class="form-control">
								<option value="0">Select</option>
								<option value="1">Romanian</option>
								<option value="2">English</option>
							</select>
						</div>
						<span class="pull-right">
							<a href="" class="btn btn-default">Cancel</a>
							<input type="submit" value="Save" class="btn btn-primary">
						</span>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection