@extends('layouts.app')

@section('title', $resource['title'])

@section('content')
    <h1>{{ $resource['title'] }}</h1>
    <p>{{ $resource['description']}}</p>
    <a href="{{ url('/resources') }}"><- Retour</a>
@endsection

