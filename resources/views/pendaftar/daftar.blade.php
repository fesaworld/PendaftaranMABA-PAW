@extends('adminlte::page')
@section('title', 'Daftar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (Auth::user()->biodata != null)
            <div class="alert alert-success" role="alert">
                Anda Sudah Mengisi Biodata, Silahkan
                <a href="/pendaftar/biodata" class="w3-btn w3-black">Cek Biodata</a>
            </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('Form Pedaftaran') }}</div>
 
                <div class="card-body">
 
                    <form method="POST" action="/pendaftar/dashboard">
                        @csrf
 
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>
 
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>
 
                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="nisn" class="col-md-4 col-form-label text-md-right">{{ __('NISN') }}</label>
 
                            <div class="col-md-6">
                                <input id="nisn" type="text" class="form-control{{ $errors->has('nisn') ? ' is-invalid' : '' }}" name="nisn" value="{{ old('nisn') }}" required>
 
                                @if ($errors->has('nisn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nisn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>
 
                            <div class="col-md-5">
                                <input id="tempat_lahir" type="text" class="form-control{{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autofocus>
 
                                @if ($errors->has('tempat_lahir'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>
 
                            <div class="col-md-4">
                                <input id="tanggal_lahir" type="text" class="form-control{{ $errors->has('tanggal_lahir') ? ' is-invalid' : '' }}" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autofocus>
                                <small id="passwordHelpBlock" class="form-text text-danger">
                                 Format: YYYY-MM-DD, contoh 1990-11-29.
                                </small>                                
 
                                @if ($errors->has('tanggal_lahir'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_telp" class="col-md-4 col-form-label text-md-right">{{ __('No. Telp') }}</label>
 
                            <div class="col-md-4">
                                <input id="no_telp" type="text" class="form-control{{ $errors->has('no_telp') ? ' is-invalid' : '' }}" name="no_telp" value="{{ old('no_telp') }}" required autofocus>
 
                                @if ($errors->has('no_telp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_telp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Lengkap') }}</label>
                            <div class="col-md-6">
                                <textarea id="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" rows="3"></textarea>
 
                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="un_average" class="col-md-4 col-form-label text-md-right">{{ __('NEM') }}</label>
 
                            <div class="col-md-4">
                                <input id="un_average" type="text" class="form-control{{ $errors->has('un_average') ? ' is-invalid' : '' }}" name="un_average" value="{{ old('un_average') }}" required autofocus>
 
                                @if ($errors->has('un_average'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('un_average') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="no_ijazah" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Ijazah') }}</label>
 
                            <div class="col-md-4">
                                <input id="no_ijazah" type="text" class="form-control{{ $errors->has('no_ijazah') ? ' is-invalid' : '' }}" name="no_ijazah" value="{{ old('no_ijazah') }}" required autofocus>
 
                                @if ($errors->has('no_ijazah'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_ijazah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        {{-- <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Upload Foto') }}</label>
                            <div class="col-md-7">
                                <input id="foto" type="file" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" value="{{ old('foto') }}" required autofocus>
 
                                @if ($errors->has('foto'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="berkas" class="col-md-4 col-form-label text-md-right">{{ __('Upload Berkas Ijazah') }}</label>
                            <div class="col-md-7">
                                <input id="berkas" type="file" class="form-control{{ $errors->has('berkas') ? ' is-invalid' : '' }}" name="berkas" value="{{ old('berkas') }}" required autofocus>
 
                                @if ($errors->has('berkas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('berkas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total_pembayaran" class="col-md-4 col-form-label text-md-right">{{ __('Upload Bukti Pembayaran') }}</label>
                            <div class="col-md-7">
                                <input id="total_pembayaran" type="file" class="form-control{{ $errors->has('total_pembayaran') ? ' is-invalid' : '' }}" name="total_pembayaran" value="{{ old('total_pembayaran') }}" required autofocus>
 
                                @if ($errors->has('total_pembayaran'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('total_pembayaran') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
 
   
 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                @if (Auth::user()->biodata != null)
                                    <button type="submit" class="btn btn-primary" disabled>
                                        {{ __('Daftar') }}
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Daftar') }}
                                    </button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection