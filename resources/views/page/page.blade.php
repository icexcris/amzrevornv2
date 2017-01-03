@extends('layouts.master')
@section('content') 
<div class="col-md-8 col-md-offset-2">

<div class="panel panel-white post panel-shadow">
 <div class="container-fluid">
<div class="col-md-10 col-md-offset-1">

 
	<div class="contact {{ $pageData->slug }}">
		{!! $pageData->content !!}
	</div>
	</div>
	</div>
	</div>
	</div>

@endsection