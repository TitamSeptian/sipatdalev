@extends('layouts.admin.app', ['title' => 'Surat Nota Dinas'])
@section('js')
    <script src="{{ asset('assets/modules/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/modules/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/modules/dataTables.select.min.js') }}"></script>
    <script>
        $("#table-1").dataTable({
            "columnDefs": [{
                "sortable": false,
                "targets": [2, 3]
            }]
        });
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/select.bootstrap4.min.css') }}">
@endsection
@section('content')
    @include('partials.alert')
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row justify-content-end my-2">
                <a href="{{ route('no_dinas.create') }}" class="btn btn-primary "><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th>Nomor Surat</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surat as $s)
                            <tr>
                                <td>{{ $s->no_surat }}</td>
                                <td>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <a href="{{ route('no_dinas.show', $s->id) }}"
                                            target="_blank"class="btn btn-info">Lihat</a>
                                        <a href="{{ route('no_dinas.download', $s->id) }}" target="_blank"
                                            class="btn btn-light ml-2"><i class="fas fa-download"></i>
                                            Download</a>
                                        <form action="{{ route('no_dinas.destroy', $s->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ml-2"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')"> Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
