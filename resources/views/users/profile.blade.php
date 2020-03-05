@extends('layouts.card-folder')

@section('card-title','Perfil')

@push('style')
    <style>
        .profile {
            float: left;
        }

        .profile-body {
            width: 100%;
        }

        .profile-logo {
            width: 15%;
            height: 100px;
        }

        .profile-top {
            width: 85%;
            height: 100px;
        }

        .profile-name {
            width: 50%;
            height: 100px;
            padding: 4%;
        }

        .profile-info {
            width: 50%;
            height: 100px;
            padding: 4%;
        }

        .profile-button {
            margin-top: 30px;
        }
    </style>
@endpush

@section('card-content')
    <div class="profile profile-body">
        <div class="profile profile-logo">
            <img src="{{ asset('images/profiles/' . $user->profile) }}" width="100%" height="100%">
        </div>
        <div class="profile profile-top">
            <div class="profile profile-name">
                <h3>{{ $user->name }}</h3>
                <h6>{{ $user->email }}</h6>
            </div>
            <div class="profile profile-info">
                <h6>Total de Avaliações: {{ $user->evaluations->count() }}</h6>
            </div>
        </div>

        <div class="profile profile-button">
            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar Perfil</a>
            <a class="btn btn-primary" href="{{ route('evaluations.list',$user->id) }}">Avaliações</a>
        </div>
    </div>

@endsection
