@extends('layouts.main')

@section('title')
Dashboard -
@stop

@section('csspage')
@stop

@section('content')
<div class="jumbotron" data-pages="parallax">
    <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
        <div class="inner">
            <ul class="breadcrumb">
                <li><a href="" class="active">Post</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid container-fixed-lg">
    <div class="panel panel-transparent">
        <div class="panel-heading">
            <div class="pull-left">
                <a href="{{ url('v/post/create') }}" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Post Baru</a>
            </div>
            <div class="pull-right">
                <input type="text" class="form-control" placeholder="Search" id="searchInput">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="dataTables_wrapper form-inline no-footer">
                <i>*klik pada baris untuk detail informasi</i>
                <table class="table table-hover no-footer table-responsive-block" role="grid" id="datatables">
                    <thead>
                        <tr role="row">
                            <th class="cell-action"></th>
                            <th>Url</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Tag</th>
                            <th>Content</th>
                            <th>Date</th>
                            <th class="cell-action">Edit</th>
                            <th class="cell-action">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $value)
                        <tr onclick="toggleRow('{{ $key+1 }}')">
                            <td><b>{{ $key+1 }}</b></td>
                            <td>{{ $value->nokta }}</td>
                            <td>{{ $value->namalengkap }}</td>
                            <td>{{ $value->jeniskelamin }}</td>
                            <td>
                                <center>
                                    <a href="{{ url('v/anggota/'.$value->id) }}">
                                        <i class="fa fa-file-text"></i>
                                    </a>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <a href="{{ url('v/anggota/'.$value->id.'/print') }}">
                                        <i class="fa fa-print"></i>
                                    </a>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <a href="{{ url('v/anggota/'.$value->id.'/card') }}">
                                        <i class="fa fa-id-card"></i>
                                    </a>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <a href="{{ url('v/anggota/'.$value->id.'/edit') }}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </center>
                            </td>
                            <td>
                                <form method="post" action="{{ url('v/anggota/'.$value->id) }}" id="del{{ $value->id }}">
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
                        <tr id="row{{ $key+1 }}" style="display:none;">
                            <td></td>
                            <td colspan="3">
                                <b>Status : </b>{{ $value->statusnikah }}<br>
                                <b>TTL : </b>{{ $value->tempatlahir }} / {{ $value->tanggallahir }}<br>
                                <b>Alamat : </b>
                                {{ $value->alamat }}, RT : {{ $value->rt }}, RW : {{ $value->rw }}, {{ $value->desa }}<br>
                                {{ $value->kecamatan }}, {{ $value->kabupaten }}, {{ $value->provinsi }}<br>
                                <b>Kodepos : </b>{{ $value->kodepos }}<br>
                                <b>No Telp : </b>{{ $value->notelp }}<br>
                                <b>No Rumah : </b>{{ $value->norumah }}<br>
                                <b>No Hp : </b>{{ $value->nohp }}<br>
                                <b>Email : </b>{{ $value->email }}
                            </td>
                            <td></td>
                            <td></td>
                            <td colspan="3">
                                <div class="link-detail">
                                    <a href="{{ url('v/anggota/'.$value->id.'/keluarga') }}"><i class="fa fa-fw fa-external-link"></i> Keluarga</a>
                                </div>
                                <div class="link-detail">
                                    <a href="{{ url('v/anggota/'.$value->id.'/pendidikan') }}"><i class="fa fa-fw fa-external-link"></i> Pendidikan</a>
                                </div>
                                <div class="link-detail">
                                    <a href="{{ url('v/anggota/'.$value->id.'/pekerjaan') }}"><i class="fa fa-fw fa-external-link"></i> Pekerjaan</a>
                                </div>
                                <div class="link-detail">
                                    <a href="{{ url('v/anggota/'.$value->id.'/organisasi') }}"><i class="fa fa-fw fa-external-link"></i> Organisasi</a>
                                </div>
                                <div class="link-detail">
                                    <a href="{{ url('v/anggota/'.$value->id.'/jabatan') }}"><i class="fa fa-fw fa-external-link"></i> Jabatan</a>
                                </div>
                                <div class="link-detail">
                                    <a href="{{ url('v/anggota/'.$value->id.'/keahlian') }}"><i class="fa fa-fw fa-external-link"></i> Keahlian</a>
                                </div>
                                <div class="link-detail">
                                    <a href="{{ url('v/anggota/'.$value->id.'/training') }}"><i class="fa fa-fw fa-external-link"></i> Training</a>
                                </div>
                                <div class="link-detail">
                                    <a href="{{ url('v/anggota/'.$value->id.'/prestasi') }}"><i class="fa fa-fw fa-external-link"></i> Prestasi</a>
                                </div>
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
