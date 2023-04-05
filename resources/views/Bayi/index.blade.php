@extends('Bayi.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Data Bayi Politeknik Negeri Malang</h2>
            </div>
            <form class="form-left my-4" method="get" action="{{route('search')}}">
            <div class="float-group w-80 mb-3">
                <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="search">
                <button type="submit" class="btn btn-secondary mb-1">Cari</button>
                <a class="btn btn-success" href="{{ route('Bayi.create') }}" style="margin-left: 9cm"> Input Data Bayi</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>no_urut</th>
            <th>nama</th>
            <th>alamat</th>
            <th>tanggal_lahir</th>
            <th>bb_lahir</th>
            <th>tb_lahir</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bayis as $Bayi)
            <tr>

                <td>{{ $Bayi->no_urut }}</td>
                <td>{{ $Bayi->nama }}</td>
                <td>{{ $Bayi->alamat}}</td>
                <td>{{ $Bayi->tanggal_lahir }}</td>
                <td>{{ $Bayi->bb_lahir }}</td>
                <td>{{ $Bayi->tb_lahir }}</td>
                <td>
                    <form action="{{ route('Bayi.destroy', $Bayi->no_urut) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('Bayi.show', $Bayi->no_urut) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('Bayi.edit', $Bayi->no_urut) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $bayis->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection
