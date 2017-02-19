@extends('admin.master')

@section('content')
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="admin-wrapper">
					<form action="">
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control" value="{{ $post->title }}">
						</div>

						@if(isset($post->picture))
							<div class="row">
								<div class="col-md-1">
									<img src="{{ asset('uploads/pictures/'.$post->picture) }}" alt="" class="img img-responsive">
								</div>
								<div class="col-md-11">
									<div class="form-group">
										<label for="">Picture</label>
										<input type="file" >
									</div>								
								</div>
							</div>
						@else
							<div class="form-group">
								<label for="">Picture</label>
								<input type="file" >
							</div>
						@endif	

						<div class="form-group">
							<label for="">Description</label>
							<textarea id="description" name="description" cols="30" rows="4" class="form-control">{{ $post->description }}</textarea>
						</div>
						<div class="form-group">
							<label for="">Language</label>
							<select name="lang" id="" class="form-control">
								<option value="0"> - Select -</option>
								<option value="1" {{ $post->lang == 1 ? 'selected' : '' }}>Romanian</option>
								<option value="2" {{ $post->lang == 2 ? 'selected' : '' }}>English</option>
							</select>
						</div>
						<span class="pull-right">
							<a href="{{ route('posts.blog.index') }}" class="btn btn-default">Close</a>
							<input type="submit" value="Save" class="btn btn-primary">
						</span>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script>CKEDITOR.replace('description');</script>
@endsection