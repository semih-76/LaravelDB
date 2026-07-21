@extends('layouts.app')

@section('title', 'Modifier une ressource')

@section('content')
    <h1>Modifier {{ $resource->titre }}</h1>
    <form method="POST" action="{{ url('/resources/' . $resource->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="titre" value="{{ old('titre', $resource->titre) }}"><br>
        @error('titre') <span style="color:red;">{{ $message }}</span> @enderror
        <input type="text" name="type" value="{{ old('type', $resource->type) }}"><br>
        @error('type') <span style="color:red;">{{ $message }}</span> @enderror
        <input type="text" name="statut" value="{{ old('statut', $resource->statut) }}"><br>
        @error('statut') <span style="color:red;">{{ $message }}</span> @enderror
        <input type="text" name="emprunteur" value="{{ old('emprunteur', $resource->emprunteur) }}"><br>
        <button type="submit">Modifier</button>
    </form>
    <a href="{{ url('/resources') }}">Retour</a>
@endsection
