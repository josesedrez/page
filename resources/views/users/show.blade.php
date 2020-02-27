@extends('layouts.card-folder')

@push('style')
    <style>
        .user-info {
            border: 1px solid darkgray;
            background-color: lightgray;
        }
    </style>
@endpush

@section('card-title','Usuário')

@section('card-content')

    <div class="row user-info">
        <div class="col-md-4">
            <img src="{{ asset('images/profiles/default-profile.png') }}" width="100%">
        </div>
        <div class="col-md-8">
            <h3>{{ $user->name }}</h3>

            <span><b>Email: </b></span>
            <span>{{ $user->email }}</span>
            <br>

            <span><b>Qtd. Avaliações: </b></span>
            <span>{{ $user->evaluations->count() }}</span>
            <br>
        </div>

    </div>

@endsection
