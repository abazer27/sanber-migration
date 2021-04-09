@extends('layouts.master')

@section('title')
    Data Caster
@endsection

@section('content')

    <h4>Nama : {{$casts->nama}}</h4>
    <p>Umur : {{$casts->umur}}</p>
    <p>Biodata: {{$casts->biodata}}</p>

@endsection