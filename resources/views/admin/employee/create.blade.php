@extends('layouts.admin.app', ['title' => 'Pegawai'])

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('employee.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip"
                        placeholder="cont. 1999999999" value="{{ old('nip') }}">
                    @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" name="name"
                        placeholder="cont. Maman" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" name="position"
                        placeholder="cont. Kepala Bidang" value="{{ old('position') }}">
                    @error('position')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
