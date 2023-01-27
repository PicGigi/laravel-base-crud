@extends('layouts.base')
@section('content')
    <h2>{{ $fumetto->title }}</h2>
    <form method="POST" action="{{ route('comics.update', $fumetto) }}">
        @method('PUT')
        @csrf
        <input value="{{ $fumetto->title }}" type="text" name="title" id=""><br>
        <input value="{{ $fumetto->description }}" type="text" name="description" id=""><br>
        <input value="{{ $fumetto->thumb }}" type="text" name="thumb" id=""><br>
        <input value="{{ $fumetto->price }}" type="number" name="price" id=""><br>
        <input value="{{ $fumetto->series }}" type="text" name="series" id=""><br>
        <input value="{{ $fumetto->sale_date }}" type="date" name="sale_date" id=""><br>
        <input value="{{ $fumetto->type }}" type="text" name="type" id=""><br>

        <button type="submit">Submit</button>
    </form>
@endsection
