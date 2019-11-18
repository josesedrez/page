@extends('layouts.card-folder')

@section('card-title','Jogos')

@section('card-content')
    <ul>
        <li>
            <a href="{{ route('games.create') }}">Criar novo jogo</a>
        </li>
        <li>
            <a href="{{ route('admin') }}">Voltar</a>
        </li>
    </ul>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>
                        <span><a href="{{ route('games.show',$game->id) }}">{{ $game->title }}</a></span>
                    </td>
                    <td>
                        <span>{{ $game->description }}</span>
                    </td>
                    <td>
                        <a href="{{ route('games.edit',$game->id) }}">Editar</a>
                        <a href="{{ route('games.editCategories',$game->id) }}">Categorias</a>
                        <form action="{{ route('games.destroy',$game->id) }}" method="post">
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
