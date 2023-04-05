@extends('Bayi.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Data Bayi
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>no_urut: </b>{{ $Bayi->no_urut }}</li>
                        <li class="list-group-item"><b>nama: </b>{{ $Bayi->nama}}</li>
                        <li class="list-group-item"><b>alamat: </b>{{ $Bayi->alamat }}</li>
                        <li class="list-group-item"><b>tanggal_lahir: </b>{{ $Bayi->tanggal_lahir }}</li>
                        <li class="list-group-item"><b>bb_lahir: </b>{{ $Bayi->bb_lahir }}</li>
                        <li class="list-group-item"><b>tb_lahir: </b>{{ $Bayi->tb_lahir }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('Bayi.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
