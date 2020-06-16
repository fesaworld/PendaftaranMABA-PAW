@extends('adminlte::page')
@section('title', 'Status')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">{{ __('Status Pendaftar') }}</div>
 
                <div class="card-body">
 
                    <form method="post" action="/admin/ {{ Auth::user()->id }}">
                        @method('patch')
                        @csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
 
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ Auth::user()->biodata->nama }}" disabled>
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="nisn" class="col-md-4 col-form-label text-md-right">NISN</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" value="{{ Auth::user()->biodata->nisn }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="un_average" class="col-md-4 col-form-label text-md-right">NEM</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('un_average') is-invalid @enderror" id="un_average" name="un_average" value="{{ Auth::user()->biodata->un_average }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_ijazah" class="col-md-4 col-form-label text-md-right">No Ijazah</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('no_ijazah') is-invalid @enderror" id="no_ijazah" name="no_ijazah" value="{{ Auth::user()->biodata->no_ijazah }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ Auth::user()->biodata->status }}" disabled>
 
                                @if ($errors->has('status'))
                                <div class="invalid-feedback">Status harus diisi!</div>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="no_test" class="col-md-4 col-form-label text-md-right">Nomor Test</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('no_test') is-invalid @enderror" id="no_test" name="no_test" value="{{ Auth::user()->biodata->no_test }}" disabled>
 
                                @if ($errors->has('no_test'))
                                <div class="invalid-feedback">Nomor Test harus diisi!</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lokasi" class="col-md-4 col-form-label text-md-right">Lokasi</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{Auth::user()->biodata->lokasi }}" disabled>
 
                                @if ($errors->has('lokasi'))
                                <div class="invalid-feedback">Lokasi harus diisi!</div>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop 