@extends('admin.master')

@section('content')
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="admin-wrapper">
					<div class="row">
						<div class="col-md-10">
							<!-- data -->
						</div>
						<div class="col-md-2">
							<span class="pull-right">
								<a href="{{ route('posts.video.create') }}" class="btn btn-primary">Add Video</a>
							</span>
						</div>
					</div>
				</div>
				<br>
				<div class="admin-wrapper">
					<table class="table table-responsive table-bordered table-condensed table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Language</th>
								<th>Author</th>
								<th>Created at</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach($videos as $video)
								<tr>
									<td>{{ $video->id }}</td>
									<td>{{ $video->title }}</td>
									<td>{{ $video->lang == 1 ? 'Romanian' : 'English' }}</td>
									<td>{{ $video->author }}</td>
									<td>{{ $video->created_at }}</td>
									<td>
										<a href="{{ route('posts.video.update', $video->id) }}" class="btn btn-default btn-xs">Edit</a>
										<a href="{{ route('posts.video.destroy', $video->id) }}" class="btn btn-default btn-xs">Delete</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{ $videos->links() }}
				</div>

			</div>
		</div>	
	</div>
@endsection