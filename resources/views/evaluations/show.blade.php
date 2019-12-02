@extends('layouts.card-folder')

@section('card-title')
    Avaliação de {{ $evaluation->game->title }}
@endsection

@push('style')
    <style>
        .evaluation-status > div {
            border: 1px solid lightgray;
            background: whitesmoke;
        }

        .evaluation-description {
            min-height: 200px;
        }
    </style>
@endpush

@section('card-content')

    <ul>
        @if (Auth::user())
            @if ($evaluation->user->id == Auth::user()->id)
                <li><a class="btn btn-primary" role="button" href="{{ route('evaluations.edit',[$evaluation->id,$evaluation->game->id]) }}">Editar</a></li>
                <li>
                    <form action="{{ route('evaluations.destroy',$evaluation->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-primary" type="submit">Deletar</button>
                    </form>
                </li>
            @endif
        @endif
        <li><a class="btn btn-primary" role="button" href="{{ route('games.show', $evaluation->game->id) }}">Voltar</a></li>
    </ul>
    <div>

        <div class="row justify-content-center evaluation-status text-center">
            <div class="col-md-8">
                <h3>{{ $evaluation->title }}</h3>
            </div>
        </div>

        <div class="row justify-content-center evaluation-status text-center">
            <div class="col-md-8 evaluation-description">
                <p>{{ $evaluation->description }}</p>
            </div>
        </div>

        <div class="row justify-content-center evaluation-status text-center">
            <div class="col-md-12">
                <h5>Média Total: {{ $evaluation->grade }}</h5>
            </div>
        </div>

        <div class="row evaluation-status">
            <div class="col-md-4">
                <h4>Mecânica de jogo</h4>
                <p>Objetivos: {{ $evaluation->gameMechanic->objective_grade }}</p>
                <p>Desafios: {{ $evaluation->gameMechanic->challenge_grade }}</p>
                <p>Regras: {{ $evaluation->gameMechanic->rule_grade }}</p>
                <p>Controles: {{ $evaluation->gameMechanic->control_grade }}</p>
            </div>
            <div class="col-md-4">
                <h4>História</h4>
                <p>Cenário: {{ $evaluation->story->scenario_grade }}</p>
                <p>Construção de personagem: {{ $evaluation->story->character_building_grade }}</p>
                <p>Enredo: {{ $evaluation->story->plot_grade }}</p>
            </div>
            <div class="col-md-4">
                <h4>Audio Visual</h4>
                <p>Gráfico: {{ $evaluation->audioVisual->graphic_grade }}</p>
                <p>Audio: {{ $evaluation->audioVisual->audio_grade }}</p>
            </div>
        </div>

        <div class="row" id="app">
            <commentary></commentary>
        </div>
    </div>


<script src="{{ asset('/js/app.js') }}"></script>
@endsection
