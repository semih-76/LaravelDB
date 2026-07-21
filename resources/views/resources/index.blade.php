@extends('layouts.app')

@section('title', 'Liste des ressources')

@section('content')
    <h1>Ressources</h1>
    <a href="{{ route('resources.create') }}">Ajouter</a>

    @foreach($resources as $resource)
        <div>
            <a href="{{ route('resources.show', $resource->id) }}">
                {{ $resource->titre }}
            </a>
            <p>{{ $resource->type }} - {{ $resource->statut }}</p>
            <a href="{{ route('resources.edit', $resource->id) }}">Modifier</a>
            <form method="POST" action="{{ route('resources.destroy', $resource->id) }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Supprimer cette ressource ?')">Supprimer</button>
            </form>
        </div>
    @endforeach
@endsection
