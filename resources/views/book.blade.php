@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Pengelolaan Buku')}}</div>
<div class="card-body">
    <table id="table-data" class="table table-bordered">
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahBukuModal"><i class="fa fa-plus"></i>Tambah Data</button>

        <thead>
            <tr>
                <th>NO</th>
                <th>JUDUL</th>
                <th>PENULIS</th>
                <th>TAHUN</th>
                <th>PENERBIT</th>
                <th>COVER</th>
                <th>AKSI</th>
            </tr>
        </thead>
    <tbody>
        @php $no=1;@endphp
        @foreach ($books as $book)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->tahun }}</td>
            <td>{{ $book->penerbit }}</td>
            <td>
                @if($book->cover !== null)
                <img src="{{
                asset('storage/cover_buku/'.$book->cover) }}" width="100px"/>
                @else
                    [Gambar tidak tersedia]
                @endif
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

