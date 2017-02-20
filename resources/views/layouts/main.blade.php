<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<title>@yield('title')Content Editor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
	<link rel="icon" type="image/png" href="{{ asset('gajahduduk.png') }}" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="{{ asset('assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/plugins/bootstrapv3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
	<link href="{{ asset('assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
	<link href="{{ asset('assets/plugins/datatables-responsive/css/datatables.responsive.css') }}" rel="stylesheet" type="text/css" media="screen"/>
	<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css" media="screen">
	<link href="{{ asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" media="screen">
	<link href="{{ asset('pages/css/pages-icons.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('pages/css/pages.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet" />
	<link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
	<style media="screen">
		.table thead tr th {
			padding-left: 20px;
			padding-right: 20px;
		}
		.table tbody tr td{
			padding-top: 10px;
			padding-bottom: 10px;
		}
		.jumbotron{
			margin-bottom:0px;
		}
		.form-horizontal .form-group{
			padding-top: 8px;
			padding-bottom: 8px;
		}
		.cell-action{
			width:5%;
		}
		.select2-container--default .select2-selection--single {
			border-radius: 0px;
		}
		
	</style>
	@yield('csspage')
</head>

<body class="fixed-header menu-behind">
	<nav class="page-sidebar" data-pages="sidebar">
		<div class="sidebar-header">
		</div>
		<div class="sidebar-menu">
			<ul class="menu-items" id="menuitems">
				<li class="m-t-10">
					<a href="{{ url('v/home') }}">
						<span class="title">Home</span>
					</a>
					<span class="icon-thumbnail"><i class="fa fa-home"></i></span>
				</li>
				<li>
					<a href="{{ url('v/user') }}">
						<span class="title">User</span>
					</a>
					<span class="icon-thumbnail"><i class="fa fa-users"></i></span>
				</li>
				<li>
					<a href="{{ url('v/post') }}">
						<span class="title">Post</span>
					</a>
					<span class="icon-thumbnail"><i class="fa fa-file-o"></i></span>
				</li>
				<li>
					<a href="{{ url('v/gallery') }}">
						<span class="title">Gallery</span>
					</a>
					<span class="icon-thumbnail"><i class="fa fa-image"></i></span>
				</li>
				<!-- <li>
					<a href="{{ url('v/post') }}">
						<span class="title">Review</span>
					</a>
					<span class="icon-thumbnail"><i class="fa fa-comment"></i></span>
				</li> -->
			</ul>
			<div class="clearfix"></div>
		</div>
	</nav>
	<div class="page-container ">
		<div class="header ">
			<div class="container-fluid relative">
				<div class="pull-left full-height visible-sm visible-xs">
					<div class="header-inner">
						<a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
							<span class="icon-set menu-hambuger"></span>
						</a>
					</div>
				</div>
				<div class="pull-center hidden-md hidden-lg">
					<div class="header-inner">
						<div class="brand inline">
							<img src="{{ asset('assets/img/logo.jpg') }}" alt="logo" data-src="{{ asset('assets/img/logo.jpg') }}" height="40">
						</div>
					</div>
				</div>
			</div>

			<div class=" pull-left sm-table hidden-xs hidden-sm">
				<div class="header-inner">
					<div class="brand inline">
						<img src="{{ asset('assets/img/logo.jpg') }}" alt="logo" data-src="{{ asset('assets/img/logo.jpg') }}" height="50">
					</div>
				</div>
			</div>
			<?php $useractive = Session::get('user'); ?>
			<div class=" pull-right">
				<div class="visible-lg visible-md m-t-10">
					<div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
						<span class="semi-bold">{{ $useractive['fullname'] }}</span>
					</div>
					<div class="dropdown pull-right">
						<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="thumbnail-wrapper d32 circular inline m-t-5">
								<img src="{{ asset('assets/img/avatar.png') }}" alt="" data-src="{{ asset('assets/img/avatar.png') }}" width="32" height="32">
							</span>
						</button>
						<ul class="dropdown-menu profile-dropdown" role="menu">
							<li>
								<a href="{{ url('v/profile/edit') }}" class="clearfix">
									<span class="pull-left">Edit Profile</span>
									<span class="pull-right"><i class="pg-settings"></i></span>
								</a>
								<a href="{{ url('auth/logout') }}" class="clearfix">
									<span class="pull-left">Logout</span>
									<span class="pull-right"><i class="pg-power"></i></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="page-content-wrapper ">
			<div class="content ">
				@yield('content')
			</div>

			<div class="container-fluid container-fixed-lg footer">
				<div class="copyright sm-text-center">
					<p class="small no-margin pull-left sm-pull-reset">
						<span class="hint-text">Copyright &copy; 2016 </span>
						<span class="font-montserrat">{{ env('COPY') }}</span>.
						<span class="hint-text">All rights reserved. </span>
					</p>
					<p class="small no-margin pull-right sm-pull-reset">
						<span class="hint-text">Made by {{ env('AUTHOR') }}</span>
					</p>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/jquery/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/modernizr.custom.j') }}s" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/bootstrapv3/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/jquery-bez/jquery.bez.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/classie/classie.js') }}" type="text/javascript"></script>    
	<script src="{{ asset('assets/plugins/switchery/js/switchery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/datatables-responsive/js/datatables.responsive.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/datatables-responsive/js/lodash.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
	<script src="{{ asset('pages/js/pages.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.select2').select2();
			$('.datepicker').datepicker({
				autoclose:true,
				format:'yyyy-mm-dd'
			});
			$('.timepicker').timepicker({
				showMeridian: false,
				showSeconds: true
			});
		});
		function deleteData(id){
			var check = confirm("Are you sure want to delete this item?");
			if (check == true) {
				$('#del'+id).submit();
			}
		}
	</script>
	@yield('jspage')
</body>

</html>
