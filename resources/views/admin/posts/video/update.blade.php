@extends('admin.master')

@section('content')
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
				<div class="admin-wrapper">
					<form action="{{ route('posts.video.sotreupdate', $video->id) }}" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control" placeholder="Title" value="{{ $video->title }}">
						</div>
						<div class="form-group">
							<label for="">Video Link</label>
							<input type="text" name="video" class="form-control" placeholder="Video" value="{{ $video->video }}">
						</div>
						<div class="form-group">
							<label for="">Description</label>
							<textarea name="description" id="" class="form-control" cols="30" rows="4">{{ $video->description }}</textarea>
						</div>
						<div class="form-group">
							<label for="">Language</label>
							<select name="lang" id="" class="form-control">
								<option value="0">Select</option>
								<option value="1" {{ $video->lang == 1 ? 'selected' : '' }}>Romanian</option>
								<option value="2" {{ $video->lang == 2 ? 'selected' : '' }}>English</option>
							</select>
						</div>
						<span class="pull-right">
							<a href="{{ route('posts.video.index') }}" class="btn btn-default">Cancel</a>
							<input type="submit" value="Save" class="btn btn-primary">
						</span>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection