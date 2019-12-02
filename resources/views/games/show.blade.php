@extends('layouts.card-folder')

@push('style')
    <style>
        .game-info {
            border: 1px solid darkgray;
            background-color: lightgray;
        }
    </style>
@endpush

@section('card-title','Jogos')

@section('card-content')

    <div>
        <ul>
            @if (Auth::user())
                @if (!Auth::user()->is_admin)
                    <li><a class="btn btn-primary" role="button" href="{{ route('evaluations.create', $game->id) }}">Avaliar</a></li>
                @endif
                @if (Auth::user()->is_admin)
                    <li><a class="btn btn-primary" role="button" href="{{ route('games.edit',$game->id) }}">Editar</a></li>
                    <li><a class="btn btn-primary" role="button" href="{{ route('games.editCategories',$game->id) }}">Categorias</a></li>
                @endif
            @endif
            <li><a class="btn btn-primary" role="button" href="{{ route('games.list') }}">Voltar</a></li>
        </ul>
    </div>

    <div class="row game-info">
        <div class="col-md-4">
            <img src="{{ asset('images/covers/'.$game->cover) }}" width="100%">
        </div>
        <div class="col-md-8">
            <h3>{{ $game->title }}</h3>

            <span><b>Idade indicativa: </b></span>
            @if ($game->parental_rating == 0)
                <span>Livre</span>
            @else
                <span>{{ $game->parental_rating }} Anos</span>
            @endif
            <br>

            <span><b>Categorias: </b></span>
            @foreach ($game->categories as $category)
                <span>{{ $category->name }},</span>
            @endforeach
            <br>

            <span><b>Qtd. Avaliações: </b></span>
            <span>{{ $game->evaluations->count() }}</span>
            <br>

            <span><b>Descrição:</b></span>
            <span>{{ $game->description }}</span>
        </div>

    </div>

@endsection
