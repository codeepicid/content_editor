@extends('layouts.main')

@section('title')
Post -
@stop

@section('csspage')
@stop

@section('content')
<div class="container-fluid container-fixed-lg">
	<div class="panel panel-transparent">
		<div class="panel-heading">
			<div class="pull-left">
				<a href="{{ url('v/post/create') }}" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> New Post</a>
			</div>
			<div class="pull-right">
				<input type="text" class="form-control" placeholder="Search" id="searchInput">
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="panel-body">
			<div class="dataTables_wrapper form-inline no-footer">
				<table class="table table-hover no-footer table-responsive-block" role="grid" id="datatables">
					<thead>
						<tr role="row">
							<th class="cell-action"></th>
							<th>Title</th>
							<th>Category</th>
							<th class="cell-action">Edit</th>
							<th class="cell-action">Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $key => $value)
						<tr>
							<td><b>{{ $key+1 }}</b></td>
							<td>{{ $value->title }}</td>
							<td>{{ $value->category }}</td>
							<td>
								<center>
									<a href="{{ url('v/post/'.$value->id.'/edit') }}">
										<i class="fa fa-pencil"></i>
									</a>
								</center>
							</td>
							<td>
								<form method="post" action="{{ url('v/post/'.$value->id) }}" id="del{{ $value->id }}">
									<input type="hidden" name="_method" value="delete">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</form>
								<center>
									<a href="#" onclick="deleteData('{{ $value->id }}')">
										<i class="fa fa-times"></i>
									</a>
								</center>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@stop

@section('jspage')
<script type="text/javascript">
$(document).ready(function(){
	
});
</script>
@stop
