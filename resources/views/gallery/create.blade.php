@extends('layouts.main')

@section('title')
New Image
@stop

@section('csspage')

@stop

@section('content')
<div class="container-fluid container-fixed-lg">
	<div class="panel panel-transparent">
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="panel panel-default">
						<div class="panel-body no-padding">
							<div id="portlet-circular-minimal" class="panel panel-default">
								<div class="panel-body">
									<form method="post" action="{{ url('v/gallery') }}" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="row">
											<div class="col-xs-12">
												<label><i>url : </i><span id="url"></span></label>
												<input type="hidden" name="url" id="inputurl">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<input type="text" class="form-control input-lg" name="title" placeholder="Title" id="title" autofocus required>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-xs-12">
												<input type="file" class="form-control" name="image" id="image">
												<center><img src="" class="img-responsive" id="imagepreview"></center>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-sm-12">
												<button type="submit" class="btn btn-success">Save Image</button>
												<a href="{{ url('v/gallery') }}" class="btn btn-default">Cancel</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('jspage')
<script type="text/javascript">
function readURL(input,target) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#'+target).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function(){
	$('#image').change(function(){
		readURL(this,'imagepreview');
	})

	$('#title').change(function(){
		var title = $('#title').val();
		var headurl = 'http://patstowing.id/gallery/';
		title = title.toLowerCase();
		title = title.replace(/ /g , "-");

		$('#url').html(headurl + title);
		$('#inputurl').val(title);
	});
});
</script>
@stop
