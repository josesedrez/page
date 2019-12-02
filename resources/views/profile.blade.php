@extends('layouts.card-folder')

@section('card-title','Perfil')

@section('card-content')
    <ul>
        <li>
            <a class="btn btn-primary" href="{{ route('home') }}">Menu</a>
        </li>
        <li>
            <a class="btn btn-primary" href="{{ route('evaluations.list',$user->id) }}">Avaliações</a>
        </li>
    </ul>
    <h3>{{ $user->name }}</h3>
    <h6>{{ $user->email }}</h6>
@endsection
