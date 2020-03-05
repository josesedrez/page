@extends('layouts.card-folder')

@section('card-title','Jogos')

@section('card-content')
    <form enctype="multipart/form-data" method="POST" action="{{ route('games.update', $game->id) }}">
        @method('PUT')
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ $errors->any() ? old('title'): $game->title }}" required autofocus>

                @if ($errors->has('title'))
                    <span role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Imagem de capa') }}</label>

            <div class="col-md-6">
                <input type="file" name="cover">
            </div>
        </div>

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Classificação indicativa') }}</label>

            <div class="col-md-6">
                <select name="parentalRating">
                    <option value="0" {{ $game->parental_rating == 0 && !$errors->any() || old('parentalRating') == 0 ? 'selected' : '' }}>L</option>
                    <option value="10" {{ $game->parental_rating == 10 && !$errors->any() || old('parentalRating') == 10 ? 'selected' : '' }}>10</option>
                    <option value="12" {{ $game->parental_rating == 12 && !$errors->any() || old('parentalRating') == 12 ? 'selected' : '' }}>12</option>
                    <option value="14" {{ $game->parental_rating == 14 && !$errors->any() || old('parentalRating') == 14 ? 'selected' : '' }}>14</option>
                    <option value="16" {{ $game->parental_rating == 16 && !$errors->any() || old('parentalRating') == 16 ? 'selected' : '' }}>16</option>
                    <option value="18" {{ $game->parental_rating == 18 && !$errors->any() || old('parentalRating') == 18 ? 'selected' : '' }}>18</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

            <div class="col-md-6">
                <textarea name="description" id="description" cols="30" rows="10" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" required autofocus>{{ $errors->any() ? old('description') : $game->description }}</textarea>

                @if ($errors->has('description'))
                    <span role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Editar categoria') }}
                    </button>

                    <a href="{{ url()->previous() }}">Voltar</a>
                </div>
            </div>
    </form>
@endsection
