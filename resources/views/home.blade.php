@extends('layouts.app')

@push('style')
    <style>
        .container {
            /* border: 1px solid black; */
        }
    </style>
@endpush

@section('menu')
    @include('_components.menu')
@endsection

@section('content')
<div class="container">


    <h4>Ultimas Avaliações</h4>
    @include('_includes.evaluations.card-list',['evaluations' => $evaluations->take(5)])

    <h4>Jogos em Destaque</h4>
    @include('_includes.games.card-list',['games' => $games->take(5)])
</div>


@endsection
