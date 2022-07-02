@extends('layouts.master')

@section('content')
    <div class="container">
        <h1><p style="text-align:center">Edit Data Pasien</p></h1>
        <form action="/pasien/{{$pasien->id}}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasien->nama}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="5">{{$pasien->alamat}}</textarea><br>
                    <div id="emailHelp" class="form-text">Masukkan Alamat Lengkap. Contoh: Jl. Dau Darmorejo, Kepulungan, Gempol, Pasuruan</div>
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No HP</label>
                    <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasien->no_hp}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Umur</label>
                    <input type="text" name="umur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasien->umur}}">
                </div>
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L" @if($pasien->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                    <option value="P" @if($pasien->jenis_kelamin == "P") selected @endif>Perempuan</option>
                </select><br>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Riwayat Penyakit</label>
                    <input type="text" name="riwayat_penyakit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasien->riwayat_penyakit}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Poli</label>
                    <input type="text" name="poli" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasien->poli}}">
                </div>
                @csrf
                
                
                <input type="submit" name="submit" class="btn btn-success" value="Update">
        </form>
@endsection