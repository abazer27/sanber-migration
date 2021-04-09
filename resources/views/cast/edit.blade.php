@extends('layouts.master')

@section('title')
    Edit Data Caster
@endsection

@section('content')

<div>
    <form action="/cast/{{$casts->id}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$casts->nama}}" placeholder="Masukkan Nama">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Umur</label>
            <input type="text" class="form-control" name="umur" value="{{$casts->umur}}" placeholder="Tambahkan Umur">
            @error('umur')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Biodata</label>
            <input type="text" class="form-control" name="biodata" value="{{$casts->biodata}}" placeholder="Masukkan Biodata">
            @error('biodata')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection