@extends('layouts.card-folder')

@section('card-title','Dashboard')

@section('card-content')
    <ul>
        <li>
            <a href="{{ route('games.index') }}">Jogos</a>
        </li>
        <li>
            <a href="{{ route('categories.index') }}">Categorias</a>
        </li>
        <li>
            <a href="{{ route('evaluations.index') }}">Avaliações</a>
        </li>
    </ul>
@endsection