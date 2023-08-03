@extends('layouts.administrator')

@section('content-dashboard')
    <h5>Selamat Datang {{ Auth::user()->email }} !</h5>
@endsection
