@extends('layouts.app')

@section('title', 'Ajouter une ressource')

@section('content')
    <h1>Ajouter une ressource</h1>
    <form method="POST" action="{{ url('/resources') }}">
        @csrf
        <input type="text" name="titre" placeholder="Titre" value="{{ old('titre') }}"><br>
        @error('titre') <span style="color:red;">{{ $message }}</span> @enderror
        <input type="text" name="type" placeholder="Type"><br>
        @error('type') <span style="color:red;">{{ $message }}</span> @enderror
        <input type="text" name="statut" placeholder="Statut"><br>
        @error('statut') <span style="color:red;">{{ $message }}</span> @enderror
        <input type="text" name="emprunteur" placeholder="Emprunteur"><br>
        <button type="submit">Créer</button>
    </form>
    <a href="{{ url('/resources') }}">Retour</a>
@endsection
