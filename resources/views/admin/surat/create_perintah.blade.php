@extends('layouts.admin.app', ['title' => 'Buat Surat Perintah'])
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" name="no_surat" placeholder="000/XX.XX.XX/Dalev">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Kepada</label>
                <textarea class="form-control" required="" rows="5" style="height:100%;">1. sth. Kepala Bidang Pengelolaan Sistem Informasi Pendapatan
2. Yth. Kepala Bidang Pengelolaan Pendapatan
                    </textarea>
            </div>

        </div>
    </div>
@endsection
