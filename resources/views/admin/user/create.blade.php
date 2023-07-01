@extends('layouts.admin.app', ['title' => 'Buat User Admin'])

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                @method('POST')
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
                    <label>Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        placeholder="cont. niki@bapenda.go.id" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="********">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password Konfirmasi</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" placeholder="********">
                    @error('password_confirmation')
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
