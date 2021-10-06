@extends('layouts.master')
@section('judul')
    Halaman index
@endsection

@section('content')
    <a class="btn btn-primary btn-lg" href="{{ route('album') }}">Album</a>
@endsection
