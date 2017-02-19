@extends('admin.master')

@section('content')
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="admin-wrapper">
					<span class="pull-right">
						<a href="" class="btn btn-primary">Add blog post</a>
					</span>
					<div class="clearfix"></div>
				</div>
				<br>
				<div class="admin-wrapper">
					<table class="table table-responsive table-striped table-bordered table-condensed">
						<thead>
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Picture</th>
								<th>Author</th>
								<th>Language</th>
								<th>Category</th>
								<th>Date</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach($posts as $post)
								<tr>
									<td>{{ $post->id }}</td>
									<td>{{ $post->title }}</td>
									<td><img src="{{ asset('uploads/pictures/'.$post->picture) }}" alt="" class="img img-responsive"></td>
									<td>{{ $post->createdBy['name'] }}</td>
									<td>{{ $post->lang == 1 ? 'Romanian' : 'English' }}</td>
									<td>{{ $post->categories[0]->info->name }}</td>
									<td>{{ $post->created_at }}</td>
									<td>
										<a href="{{ route('posts.blog.update', $post->id) }}" class="btn btn-default btn-xs">Edit</a>
										<a href="" class="btn btn-default btn-xs">Delete</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{ $posts->links() }}
				</div>				
			</div>
		</div>	
	</div>
@endsection