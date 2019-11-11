@extends('layouts.card-folder')

@section('card-title','Jogos')

@section('card-content')

    <div>
        <ul>
            <li><a href="{{ route('evaluations.create', $game->id) }}">Avaliar</a></li>
            <li><a href="{{ route('games.edit',$game->id) }}">Editar</a></li>
            <li><a href="{{ route('games.editCategories',$game->id) }}">Categorias</a></li>
            <li><a href="{{ url()->previous() }}">Voltar</a></li>
        </ul>
    </div>
    
    <div>
        <div>
            <img src="{{ asset('images/covers/'.$game->cover) }}" width="30%">
        </div>
        <h3>{{ $game->title }}</h3>
        <span><b>Idade indicativa:</b> {{ $game->parental_rating }}</span> <br>
        <span><b>Categorias:</b></span>
        @foreach ($game->categories as $category)
            <span> {{ $category->name }},</span>
        @endforeach
        <br>
        <span><b>Descrição:</b></span>
        <span>{{ $game->description }}</span>
    </div>

@endsection