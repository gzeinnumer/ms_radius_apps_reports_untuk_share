@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Dashboard</h1>
            <p class="lead">Aplikasi khusus yang dibuatkan oleh MSRadius untuk load data harian yang bisa di olah diluar Aplikasi MSRadius</p>
            <a class="btn btn-lg btn-primary" href="https://msradius.com" role="button">Kunjungi MSRadius &raquo;</a>
        @endauth
    </div>
@endsection
