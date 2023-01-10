@extends('layouts.errors')

@section('content')

    <h1>ERRORE 404</h1>
    <h4>{{$exception->getMessage()}}</h4>

@endsection

@section('title')

    | 404

@endsection
