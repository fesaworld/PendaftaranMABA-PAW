@extends('layouts.app')

@section('container')
    <div class="container mt-4">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
                <form method="post" action="/admin/update/{{ $user->Biodata->id }}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="status">Nama</label>
                        <input type="text" class="form-control @error('status') is-invalid @enderror"
                        id="status" placeholder="status" name="status" value="{{ $user->Biodata->status }}">
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_test">No.Test</label>
                        <input type="text" class="form-control @error('no_test') is-invalid @enderror"
                        id="no_test" placeholder="no_test" name="no_test" value="{{ $user->Biodata->no_test }}">
                        @error('no_test')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="lokasi" class="form-control @error('lokasi') is-invalid @enderror"
                        id="lokasi" placeholder="lokasi" name="lokasi" value="{{ $user->Biodata->lokasi }}">
                        @error('lokasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection