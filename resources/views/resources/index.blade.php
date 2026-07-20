@extends('layouts.app')

@section('title', 'Liste des ressources')

@section('content')
    <h1>Ressources</h1>
    @foreach($resources as $resource)
        <div>
            <a href="{{url('/resource/' . $resource['id']) }}">
                {{ $resource['title'] }}
            </a>
            <p>{{ $resource['description'] }}</p>
        </div>
        @endforeach
    @endsection
