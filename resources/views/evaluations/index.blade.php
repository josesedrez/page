@extends('layouts.card-folder')

@section('card-title','Avaliações')

@section('card-content')
    <ul>
        <li>
            <a href="/home">Voltar</a>
        </li>
    </ul>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Título</th>
            <th scope="col">Jogo</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evaluations as $evaluation)
                <tr>
                    <td>
                        <span><a href="{{ route('evaluations.show',$evaluation->id) }}">{{ $evaluation->title }}</a></span>
                    </td>
                    <td>
                        <span><a href="{{ route('games.show',$evaluation->game->id) }}">{{ $evaluation->game->title }}</a></span>
                    </td>
                    <td>
                        <a href="{{ route('evaluations.edit',[$evaluation->id,$evaluation->game->id]) }}">Editar</a>
                        <form action="{{ route('evaluations.destroy',$evaluation->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <ul>
        
    </ul>
@endsection