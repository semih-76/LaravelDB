@extends('layouts.app')

@section('title', $resource->titre)

@section('content')
    <h1>{{ $resource->titre }}</h1>

    <p><strong>Type :</strong> {{ $resource->type }}</p>
    <p><strong>Statut :</strong> {{ $resource->statut }}</p>
    <p><strong>Emprunteur :</strong> {{ $resource->emprunteur ?? 'Aucun' }}</p>
    <p><strong>Ajouté le :</strong> {{ $resource->created_at->format('d/m/Y') }}</p>

    <a href="{{ route('resources.edit', $resource->id) }}">Modifier</a>

    <form method="POST" action="{{ route('resources.destroy', $resource->id) }}" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Supprimer cette ressource ?')">Supprimer</button>
    </form>

    <a href="{{ route('resources.index') }}">Retour à la liste</a>
@endsection

