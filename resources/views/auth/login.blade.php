@extends('layouts.auth')

@section('title')
    Login -
@stop

@section('csspage')

@stop

@section('content')
<div class="bg-pic">
    <img src="{{ asset('assets/img/studio.jpg') }}" data-src="{{ asset('assets/img/studio.jpg') }}" alt="" class="lazy">
    <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
        <h1 class="semi-bold text-white">Content Editor</h1>
        <p class="small">
            Copyrights © 2016 {{ env('COPY') }}
        </p>
    </div>
</div>
<div class="login-container bg-white">
    <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="{{ asset('assets/img/logo.jpg') }}" alt="logo" data-src="{{ asset('assets/img/logo.jpg') }}" data-src-retina="{{ asset('assets/img/logo.jpg') }}" height="100">
        <p class="p-t-35">Sign into your account</p>
        <form id="form-login" class="p-t-15" role="form" action="{{ url('auth/login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group form-group-default">
                <label>Email</label>
                <div class="controls">
                    <input type="text" name="email" class="form-control" required autofocus>
                </div>
            </div>
            <div class="form-group form-group-default">
                <label>Password</label>
                <div class="controls">
                    <input type="password" class="form-control" name="password" required>
                </div>
            </div>
            <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
        </form>
    </div>
</div>
@stop

@section('jspage')
<script>
    $(function() {
        $('#form-login').validate();
    });
</script>
    @if(Session::has('message'))
    <script type="text/javascript">
        $(document).ready(function(){
            $('body').pgNotification({
                style: 'flip',
                message: "{{ Session::get('message') }}",
                position: 'top-right',
                timeout: 3000,
                type: 'danger'
            }).show();
        });
    </script>
    @endif
@stop
