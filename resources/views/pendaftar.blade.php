@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Calon Siswa</div>
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
                      
                    <p>Anda login sebagai <strong>{{ Auth::user()->Biodata->nama }}</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection