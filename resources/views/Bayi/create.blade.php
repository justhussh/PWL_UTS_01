@extends('Bayi.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Tambah Data Bayi
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('Bayi.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="no_urut">No Urut</label>
                            <input type="text" name="no_urut" class="form-control" id="no_urut" aria-describedby="no_urut">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="nama" name="nama" class="form-control" id="nama"
                                aria-describedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="alamat" name="alamat" class="form-control" id="alamat"
                                aria-describedby="alamat">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="tanggal_lahir" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                                aria-describedby="Tanggal_Lahir">
                        </div>
                        <div class="form-group">
                            <label for="bb_lahir">Berat Badan Lahir</label>
                            <input type="bb_lahir" name="bb_lahir" class="form-control" id="bb_lahir"
                                aria-describedby="bb_lahir">
                        </div>
                        <div class="form-group">
                            <label for="tb_lahir">Tinggi Badan Lahir</label>
                            <input type="tb_lahir" name="tb_lahir" class="form-control" id="tb_lahir"
                                aria-describedby="tb_lahir">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
