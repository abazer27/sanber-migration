@extends('layouts.master')

@section('title')
    Tambah Data Caster
@endsection

@section('content')
    <div>
        <form action="/cast" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" class="form-control" name="nama"  placeholder="Masukkan Nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Umur</label>
                <input type="text" class="form-control" name="umur"  placeholder="Tambahkan Umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Biodata</label>
                <input type="text" class="form-control" name="biodata"  placeholder="Masukkan Biodata">
                @error('biodata')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection