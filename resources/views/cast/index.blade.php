@extends('layouts.master')

@section('title')
    List Case
@endsection

@section('content')
    <a href="/cast/create" class="btn btn-primary mb-2">Tambah</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Biodata</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($casts as $key=>$value)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->umur}}</td>
                    <td>{{$value->biodata}}</td>
                    <td>
                        <a href="/cast/{{$value->id}}" class="btn btn-info">Show</a>
                        <a href="/cast/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/cast/{{$value->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr colspan="3">
                    <td>No Data</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
