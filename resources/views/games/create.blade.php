@extends('layouts.card-folder')

@section('card-title','Jogos')

@section('card-content')
    <form method="POST" action="{{ route('games.store') }}">
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}" required autofocus>
                
                @if ($errors->has('title'))
                    <span role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

            <div class="col-md-6">
                <textarea name="description" id="description" cols="30" rows="10" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" required autofocus>{{ old('description') }}</textarea>
                
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
                    {{ __('Criar jogo') }}
                </button>
                
                <a href="{{ route('games.index') }}">Voltar</a>
            </div>
        </div>
    </form>
@endsection