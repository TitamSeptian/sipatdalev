@extends('layouts.admin.app', ['title' => 'Buat Surat Perintah'])
@section('js')
    <script src="{{ asset('assets/modules/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/modules/select2.full.min.js') }}"></script>
    <script>
        $(".summernote").summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol']],
            ],
        });
        $(".selectDua").select2({
            ajax: {
                url: "{{ route('employee.find') }}",
                dataType: "json",
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                    };
                },
                processResults: function(data) {
                    return {
                        results: data.items
                    };
                },
                cache: true
            },
            placeholder: 'Cari Pegawai',
            templateResult: function(repo) {
                if (repo.loading) {
                    return repo.text;
                }
                var $container = $(
                    "<div class='select2-result-repository clearfix'>" +
                    '<div class="select2-result-stock__title"></div>' +
                    '<p class="select2-result-stock__information"></p>' +
                    '</div>'
                );

                $container.find(".select2-result-stock__title").text(repo.nip);
                $container.find(".select2-result-stock__information").text(repo.name);

                return $container;
                // return repo.name+"<br>"+"<span>Qyt : "+repo.quantity+"</span>";
            },
            templateSelection: function(repo) {
                $container = $(
                    `<div class="selectionResult">
                        <div class="selectionResult__general"></div>
                    </div>`
                )
                $container.find('.selectionResult__general').html(repo.name)
                if (repo.name == undefined) {
                    return repo.text
                }
                // return repo.name+'&nbsp&nbsp<i class="fa fa-archive"></i> '+repo.quantity || repo.text;
                return $container || repo.text
            }
        })
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.11/dist/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{ asset('assets/modules/select2.min.css') }}">
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('perintah.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Nomor Surat</label>
                            <input type="text" class="form-control @error('no_surat') is-invalid @enderror"
                                name="no_surat" placeholder="000/XX.XX.XX/Dalev" value="{{ old('no_surat') }}">
                            @error('no_surat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal"
                                value="{{ old('tanggal') }}">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pegawai</label>
                            <select class="form-control selectDua @error('pegawai') is-invalid @enderror" name="pegawai">
                            </select>
                            @error('pegawai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Kepada</label>
                    <textarea class="form-control summernote @error('perihal') is-invalid @enderror" required="" name="perihal">{{ old('perihal') ?? '<ol><li>Melaksanakan&nbsp;Perjalanan&nbsp;Dinas&nbsp;dalam&nbsp;rangka&nbsp;Dalam&nbsp;rangka Pembinaan, Pemeriksaan dan Pengendalian serta Pengawasan Pajak Daerah Reguler TA 2023, di P3DW Kabupaten Garut</li><li>Dilaksanakan pada tanggal [UBAH TANGGAL]</li><li>Melaporkan hasilnya kepada Kepala Badan Pendapatan Daerah Provinsi Jawa Barat; Biaya penyelenggaraan dibebankan kepada anggaran Badan Pendapatan Daerah Provinsi Jawa Barat T.A 2023 Sub Kegiatan Pengendalian, Pemeriksaan dan Pengawasan Pajak Daerah Kode Rekening : [ISI KODE REKENING]</li><li>Dilaksanakan dengan penuh rasa tanggung jawab.</li></ol>' }}</textarea>
                    @error('perihal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary ml-auto">Buat Surat</button>
                </div>
            </form>

        </div>
    </div>
@endsection
