@extends('layouts.card-folder')

@section('card-title','Jogos')

@section('card-content')
    <form method="POST" action="{{ route('games.updateCategories', $game->id) }}">
        @method('PUT')
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Categorias') }}</label>
            <div class="col-md-6">
                @foreach ($categories as $category)
                    <input type="checkbox" name="categories[]" value="{{ $category->id }}" {{ $categoriesId->contains($category->id) ? 'checked' : '' }}>
                    <label for="categories">{{ $category->name }}</label>
                    <br>
                @endforeach
            </div>
        </div>

        <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Editar categorias') }}
                    </button>
                    
                    <a href="{{ url()->previous() }}">Voltar</a>
                </div>
            </div>
    </form>
@endsection