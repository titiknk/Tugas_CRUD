@extends('layouts.master')

@section('content')
    <div class="container">
    <h1><p style="text-align:center">DATA PASIEN</p></h1>
    <a class="btn btn-primary"  href="/pasien/create">+ Tambah Data</a>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Riwayat Penyakit</th>
            <th>Poli</th>
            <th>Aksi</th>
        </tr>
        @foreach($pasien as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nama}}</td>
            <td>{{$p->alamat}}</td>
            <td>{{$p->no_hp}}</td>
            <td>{{$p->umur}}</td>
            <td>{{$p->jenis_kelamin}}</td>
            <td>{{$p->riwayat_penyakit}}</td>
            <td>{{$p->poli}}</td>
            <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/pasien/{{$p->id}}/edit">Edit</a>
                    <form action="/pasien/{{$p->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection