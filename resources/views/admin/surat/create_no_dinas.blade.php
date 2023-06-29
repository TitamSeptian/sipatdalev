@extends('layouts.admin.app', ['title' => 'Buat Surat No. Dinas'])
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>Kepada</label>
                <textarea class="form-control" required="" rows="5" style="height:100%;">1. sth. Kepala Bidang Pengelolaan Sistem Informasi Pendapatan
2. Yth. Kepala Bidang Pengelolaan Pendapatan
                    </textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Sifat</label>
                <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                        <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                        <span class="selectgroup-button">Biasa</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="value" value="100" class="selectgroup-input">
                        <span class="selectgroup-button">Penting</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="value" value="150" class="selectgroup-input">
                        <span class="selectgroup-button">Sangat Penting</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="value" value="200" class="selectgroup-input">
                        <span class="selectgroup-button">Rahasia</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" name="no_surat" placeholder="000/XX.XX.XX/Dalev">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Dari</label>
                        <input type="text" class="form-control" placeholder="Kepala Bidang ..." name="dari">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Perihal</label>
                        <input type="text" class="form-control" name="perihal" placeholder="cont. Undangan ...">
                    </div>
                    <div class="form-group">
                        <label>Kalimat Pembuka</label>
                        <textarea name="kalimat_pembuka" id="" rows="10" style="height:100%;" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Hari/Tanggal</label>
                    <input type="text" class="form-control" name="hari_tanggal"
                        placeholder="cont. Selasa – Rabu/ 30 – 31 Mei 2023">
                </div>
                <div class="col-md-3">
                    <label>Waktu Awal</label>
                    <input type="text" class="form-control" name="waktu_awal" placeholder="cont. 09.00">
                </div>
                <div class="col-md-3">
                    <label>Waktu Akhir</label>
                    <input type="text" class="form-control" name="waktu_akhir" placeholder="cont. 17.00">
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Agenda</label>
                        <textarea name="kalimat_pembuka" id="" rows="5" style="height:100%;" class="form-control">
1.
2.</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
