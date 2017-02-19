@extends('layouts.main')

@section('title')
Edit Profile -
@stop

@section('csspage')

@stop

@section('content')
<div class="jumbotron" data-pages="parallax">
    <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
        <div class="inner">
            <ul class="breadcrumb">
                <li><a href="" class="active">Edit Profile</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid container-fixed-lg">
    <div class="panel panel-transparent">
        <div class="panel-body">
            <div class="row">
                <form class="form-horizontal" autocomplete="off" method="post" action="{{ url('v/profile/update') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" name="email" required autofocus value="{{ $data['email'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fullname" class="col-sm-3 control-label">Fullname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fullname" name="firstname" required value="{{ $data['fullname'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password (Kosongi apabila tidak diubah)</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <a href="{{ url('v/home') }}" class="btn btn-default">Batal</a>
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
