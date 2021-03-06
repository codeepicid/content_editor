@extends('layouts.main')

@section('title')
Edit User -
@stop

@section('csspage')

@stop

@section('content')
<div class="container-fluid container-fixed-lg">
	<div class="panel panel-transparent">
		<div class="panel-body">
			<div class="row">
				<form class="form-horizontal" autocomplete="off" method="post" action="{{ url('v/user/'.$data['id']) }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-5">
							<input type="email" class="form-control" name="email" value="{{ $data['email'] }}" required autofocus>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Fullname</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="fullname" value="{{ $data['fullname'] }}" required>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" name="password" required>
							<small>*kosongi apabila tidak diubah</small>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Level</label>
						<div class="col-sm-5">
							<select class="form-control" name="leveluser">
								<option @if($data['leveluser'] == 'Administrator') selected @endif>Administrator</option>
								<option @if($data['leveluser'] == 'Editor') selected @endif>Editor</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-5 col-sm-offset-2">
							<button class="btn btn-success" type="submit">Save</button>
							<a href="{{ url('v/user') }}" class="btn btn-default">Cancel</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@stop

@section('jspage')

@stop
