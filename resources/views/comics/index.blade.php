@extends('layouts.base')
    @section('content')
    <h1>Ciao {{ $utente }}</h1>
    @foreach ($fumetti as $fumetto)
        <h2>{{ $fumetto->title }}</h2>
        <h3>{{ $fumetto->description }}</h3>

        <a href="{{ route('comics.show', $fumetto) }}">GO TO</a>

        <form method="POST" action="{{ route('comics.destroy', $fumetto) }}">
            @method('DELETE')
            @csrf
            <button>DELETE</button>
        </form>

        <a href="{{ route('comics.edit', $fumetto) }}">EDIT</a>

    @endforeach
    @endsection

