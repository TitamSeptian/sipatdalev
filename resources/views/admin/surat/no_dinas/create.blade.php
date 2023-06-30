@extends('layouts.admin.app', ['title' => 'Buat Surat No. Dinas'])
@section('js')
    <script src="{{ asset('assets/modules/summernote-bs4.js') }}"></script>
    <script>
        $(".summernote").summernote({
            height: 100, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol']],
            ]
        });
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.11/dist/summernote-bs4.min.css">
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('no_dinas.store') }}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label>Kepada</label>
                    <textarea class="form-control summernote @error('kepada') is-invalid @enderror" name="kepada" required=""
                        rows="5" style="height:100%;">{{ old('kepada') }}</textarea>
                    @error('kepada')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Sifat</label>
                    <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="sifat" value="Biasa" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">Biasa</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="sifat" value="Penting" class="selectgroup-input">
                            <span class="selectgroup-button">Penting</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="sifat" value="Sangat Penting" class="selectgroup-input">
                            <span class="selectgroup-button">Sangat Penting</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="sifat" value="Rahasia" class="selectgroup-input">
                            <span class="selectgroup-button">Rahasia</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nomor Surat</label>
                            <input type="text" class="form-control @error('no_surat') is-invalid @enderror"
                                name="no_surat" value="{{ old('no_surat') }}" placeholder="000/XX.XX.XX/Dalev">
                            @error('no_surat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Dari</label>
                            <input type="text" class="form-control @error('dari') is-invalid @enderror"
                                placeholder="Kepala Bidang ..." name="dari" value="{{ old('dari') }}">
                            @error('dari')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" name="tanggal"
                                value="{{ old('date') }}">
                            @error('date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Perihal</label>
                            <input type="text" class="form-control @error('perihal') is-invalid @enderror" name="perihal"
                                value="{{ old('perihal') }}" placeholder="cont. Undangan ...">
                            @error('perihal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kalimat Pembuka</label>
                            <textarea name="kalimat_pembuka" id="" rows="10" style="height:100%;"
                                class="form-control summernote @error('kalimat_pembuka') is-invalid @enderror">{{ old('kalimat_pembuka') }}</textarea>
                            @error('kalimat_pembuka')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Hari/Tanggal</label>
                        <input type="text" class="form-control @error('hari_tanggal') is-invalid @enderror"
                            name="hari_tanggal" placeholder="cont. Selasa – Rabu/ 30 – 31 Mei 2023"
                            value="{{ old('hari_tanggal') }}">
                        @error('hari_tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label>Waktu Awal</label>
                        <input type="text" class="form-control @error('waktu_awal') is-invalid @enderror"
                            name="waktu_awal" placeholder="cont. 09.00" value="{{ old('waktu_awal') }}">
                        @error('waktu_awal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label>Waktu Akhir</label>
                        <input type="text" class="form-control @error('waktu_akhir') is-invalid @enderror"
                            name="waktu_akhir" placeholder="cont. 17.00" value="{{ old('waktu_akhir') }}">
                        @error('waktu_akhir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tempat</label>
                            <textarea name="tempat" id="" rows="2" style="height:100%;"
                                class="form-control summernote @error('tempat') is-invalid @enderror">{{ old('tempat') }}</textarea>
                            @error('tempat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Agenda</label>
                            <textarea name="agenda" id="" rows="5" style="height:100%;"
                                class="form-control summernote @error('agenda') is-invalid @enderror">{{ old('agenda') }}</textarea>
                            @error('agenda')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary ml-auto">Buat Surat</button>
                </div>
            </form>
        </div>
    </div>
@endsection
