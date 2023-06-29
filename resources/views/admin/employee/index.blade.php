@extends('layouts.admin.app', ['title' => 'Pegawai'])
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
                <a href="{{ route('employee.create') }}" class="btn btn-primary "><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">
                                #
                            </th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>{{ $employee->nip }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->position }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('employee.edit', $employee->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ml-2"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
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
