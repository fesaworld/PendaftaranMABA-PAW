@extends('adminlte::page')
@section('title', 'Pendaftar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <div class="card">
                <div class="card-header">Dashboard Pendaftar</div>
 
                <div class="card-body">
 
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop 