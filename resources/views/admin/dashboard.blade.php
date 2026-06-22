@extends('layouts.admin')

@section('content')
    <h1>Dashboard</h1>
    <p>Benvenuto, {{ Auth::user()->name }}!</p>
@endsection
