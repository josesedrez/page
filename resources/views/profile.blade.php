@extends('layouts.card-folder')

@section('card-title','Perfil')

@section('card-content')
    <ul>
        <li>
            <a href="{{ route('categories.index') }}">Menu</a>
        </li>
        <li>
            <a href="{{ route('evaluations.index') }}">Minhas Avaliações</a>
        </li>
    </ul>
    <h3>{{ $user->name }}</h3>
    <h6>{{ $user->email }}</h6>
@endsection