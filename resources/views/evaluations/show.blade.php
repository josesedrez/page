@extends('layouts.card-folder')

@section('card-title','Avaliações')

@section('card-content')

    <ul>
        <li><a href="{{ url()->previous() }}">Voltar</a></li>
    </ul>
    <div>
        <h3>{{ $evaluation->title }}</h3>
        <p>{{ $evaluation->description }}</p>
        <h4>Mecânica de jogo</h4>
        <p>Objetivos: {{ $evaluation->gameMechanic->objective_grade }}</p>
        <p>Desafios: {{ $evaluation->gameMechanic->challenge_grade }}</p>
        <p>Regras: {{ $evaluation->gameMechanic->rule_grade }}</p>
        <p>Controles: {{ $evaluation->gameMechanic->control_grade }}</p>
        <h4>História</h4>
        <p>Cenário: {{ $evaluation->story->scenario_grade }}</p>
        <p>Construção de personagem: {{ $evaluation->story->character_building_grade }}</p>
        <p>Enredo: {{ $evaluation->story->plot_grade }}</p>
        <h4>Audio Visual</h4>
        <p>Gráfico: {{ $evaluation->audioVisual->graphic_grade }}</p>
        <p>Audio: {{ $evaluation->audioVisual->audio_grade }}</p>
    </div>

@endsection