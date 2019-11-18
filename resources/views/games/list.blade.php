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

    @foreach ($allGames as $games)
        @include('_includes.games.card-list',['games' => $games])
    @endforeach



</div>


@endsection
