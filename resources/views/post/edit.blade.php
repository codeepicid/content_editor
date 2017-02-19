@extends('layouts.main')

@section('title')
Edit Post -
@stop

@section('csspage')
<link href="{{ asset('assets/plugins/summernote/css/summernote.css') }}" rel="stylesheet" type="text/css" media="screen">
<link href="{{ asset('assets/plugins/bootstrap-tag/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css"/>
<style type="text/css">
    .bootstrap-tagsinput{
        border-radius: 0px;
    }
</style>
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
                                    <form method="post" action="{{ url('v/post/'.$data['id']) }}" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="put">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label><i>url : </i><span id="url"></span></label>
                                                <input type="hidden" name="url" id="inputurl">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="text" class="form-control input-lg" name="title" placeholder="Title" id="title" value="{{ $data['title'] }}" autofocus required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <textarea name="content" class="summernote">{{ $data['content'] }}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <input type="text" class="form-control datepicker" name="date" value="{{ $data['date'] }}">
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="text" class="form-control timepicker" name="time" value="{{ $data['time'] }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="text" class="form-control" name="category" placeholder="Category" id="category" value="{{ $data['category'] }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="text" class="form-control tag" name="tag" placeholder="Tag" id="tag" value="{{ $data['tag'] }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="file" class="form-control" name="image" id="image">
                                                <center><img src="{{ asset('images/post/'.$data['image']) }}" class="img-responsive" id="imagepreview"></center>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-success">Update Post</button>
                                                <a href="{{ url('v/post') }}" class="btn btn-default">Cancel</a>
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
<script src="{{ asset('assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/summernote/js/summernote.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.tag').tagsinput({});
        $('.summernote').summernote({
            height:300,
            onfocus: function(e){
                $('body').addClass('overlay-disabled');
            },onblur:function(e){
                $('body').removeClass('overlay-disabled');
            }
        });

        $('#title').change(function(){
            var title = $('#title').val();
            var headurl = 'http://patstowing.id/post/';
            title = title.toLowerCase();
            title = title.replace(/ /g , "-");

            $('#url').html(headurl + title);
            $('#inputurl').val(title);
        });
    });
</script>
@stop
