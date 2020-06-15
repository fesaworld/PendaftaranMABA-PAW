@extends('adminlte::page')
@section('title', 'Verifikasi')
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
              <div class="card-header">Verifikasi Pendaftar</div>

              <div class="card-body">

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Pendaftar</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NISN</th>
                        <th scope="col">NEM</th>
                        <th scope="col">No. Ijazah</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Berkas Ijazah</th>
                        <th scope="col">Total Pembayaran</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Nomor Test</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 0; ?>
                      @foreach ($users as $user)
                      <?php $i++ ;?>
                      <tr>
                        <th scope="row">{{ $i }}</th>
                          <td>{{ $user->Biodata->id }}</td>
                          <td>{{ $user->Biodata->nama }}</td>
                          <td>{{ $user->Biodata->nisn }}</td>
                          <td>{{ $user->Biodata->un_average }}</td>
                          <td>{{ $user->Biodata->no_ijazah }}</td>
                          <td>
                          <a href="{{asset('images')}}/{{$user->Biodata->foto}}" target="_blank">Lihat Foto {{ $user->Biodata->nama }}</a>
                          </td>
                          <td>
                            <a href="{{asset('berkas')}}/{{$user->Biodata->berkas}}" target="_blank">Lihat Berkas Ijazah {{ $user->Biodata->nama }}</a>
                          </td>
                          <td>
                            <a href="{{asset('bayar')}}/{{$user->Biodata->total_pembayaran}}" target="_blank">Lihat Bukti Pembayaran {{ $user->Biodata->nama }}</a>
                          </td>
                          <td>{{ $user->Biodata->status }}</td>
                          <td>{{ $user->Biodata->no_test }}</td>
                          <td>{{ $user->Biodata->lokasi }}</td>
                          <td>
                            <a href="/admin/{{ $user->Biodata->id }}/edit" class="btn btn-primary my-3">Update Data</a>
                          </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>


              </div>
          </div>
      </div>
  </div>
</div>
@stop