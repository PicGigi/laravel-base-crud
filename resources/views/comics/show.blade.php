@extends('layouts.base')

@section('title', 'Fumetto: ' . $fumetto->title)

@section('content')
    <h2>{{ $fumetto->title }}</h2>
    <h3>{{ $fumetto->description }}</h3>
@endsection
