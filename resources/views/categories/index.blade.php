@extends('layouts.card-folder')

@section('card-title','Categorias')

@section('card-content')
    <ul>
        <li>
            <a href="{{ route('categories.create') }}">Criar nova categoria</a>
        </li>
        <li>
            <a href="{{ url()->previous() }}">Voltar</a>
        </li>
    </ul>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        <span>{{ $category->name }}</span>
                    </td>
                    <td>
                        <a href="{{ route('categories.edit',$category->id) }}">Editar</a>
                        <form action="{{route('categories.destroy',$category->id)}}" method="post">
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