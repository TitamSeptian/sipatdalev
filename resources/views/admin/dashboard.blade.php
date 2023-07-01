@extends('layouts.admin.app', ['title' => 'Dashboard'])

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pegawai</h4>
                    </div>
                    <div class="card-body">
                        {{ count(\App\Models\Employee::all()) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Nota Dinas</h4>
                    </div>
                    <div class="card-body">
                        {{ count(\App\Models\SuratNoDinas::all()) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Surat Perintah</h4>
                    </div>
                    <div class="card-body">
                        {{ count(\App\Models\SuratPerintah::all()) }}

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>User Admin</h4>
                    </div>
                    <div class="card-body">
                        {{ count(\App\Models\User::all()) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
