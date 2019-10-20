@extends('layouts.card-folder')

@section('card-title','Jogos')

@section('card-content')

    <ul>
        <li><a href="{{ route('evaluations.create', $game->id) }}">Avaliar</a></li>
        <li><a href="{{ route('games.index') }}">Voltar</a></li>
    </ul>
    <div>
        <h3>{{ $game->title }}</h3>
        <p>{{ $game->description }}</p>
    </div>

@endsection