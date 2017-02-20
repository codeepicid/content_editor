@extends('layouts.main')

@section('title')
Gallery - 
@stop

@section('csspage')
@stop

@section('content')
<div class="container-fluid container-fixed-lg">
	<br>
	<div class="row">
		<div class="col-xs-12">
			<div class="pull-left">
				<a href="{{ url('v/gallery/create') }}" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> New Image</a>
			</div>
			<div class="pull-right">
				<input type="text" class="form-control" placeholder="Search" id="searchInput">
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<br>
	<div class="row">
		@foreach($data as $value)
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading separator">
					<form method="post" action="{{ url('v/gallery/'.$value->id) }}" id="del{{ $value->id }}">
						<input type="hidden" name="_method" value="delete">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</form>
					<div class="panel-title" style="text-transform: none;">{{ $value->title }}</div>
					<div class="pull-right">
						<a href="{{ url('v/gallery/'.$value->id.'/edit') }}"><i>Edit</i></a> / 
						<a href="#" onclick="deleteData('{{ $value->id }}')"><i>Delete</i></a>
					</div>
				</div>
				<div class="panel-body">
					<img src="{{ asset('gallery/'.$value->location) }}" class="img-responsive">
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

@stop

@section('jspage')
<script type="text/javascript">
$(document).ready(function(){
	
});
</script>
@stop
