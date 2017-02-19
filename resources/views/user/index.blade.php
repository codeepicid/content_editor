@extends('layouts.main')

@section('title')
User -
@stop

@section('csspage')
@stop

@section('content')
<div class="container-fluid container-fixed-lg">
	<div class="panel panel-transparent">
		<div class="panel-heading">
			<div class="pull-left">
				<a href="{{ url('v/user/create') }}" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> New User</a>
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
							<th>Email</th>
							<th>Fullname</th>
							<th>Level</th>
							<th style="width:5%;">Edit</th>
							<th style="width:5%;">Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $key => $value)
						<tr onclick="toggleRow('{{ $key+1 }}')">
							<td><b>{{ $key+1 }}</b></td>
							<td>{{ $value->email }}</td>
							<td>{{ $value->fullname }}</td>
							<td>{{ $value->leveluser }}</td>
							<td>
								<center>
									<a href="{{ url('v/user/'.$value->id.'/edit') }}">
										<i class="fa fa-pencil"></i>
									</a>
								</center>
							</td>
							<td>
								<form method="post" action="{{ url('v/user/'.$value->id) }}" id="del{{ $value->id }}">
									<input type="hidden" name="_method" value="delete">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</form>
								<center>
									@if($value->id != 0)
									<a href="#" onclick="deleteData('{{ $value->id }}')">
										<i class="fa fa-times"></i>
									</a>
									@endif
								</center>
							</td>
						</tr>
						<tr id="row{{ $key+1 }}" style="display:none;">
							<td></td>
							<td colspan="3">
								<b>Status : </b>{{ $value->password }}<br>
							</td>
							<td></td>
							<td></td>
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
