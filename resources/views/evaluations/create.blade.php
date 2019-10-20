@extends('layouts.card-folder')

@section('card-title','Avaliações')

@section('card-content')
    <form method="POST" action="{{ route('evaluations.store') }}">
        @csrf

        <input type="hidden" name="gameId" value="{{ $gameId }}">

        <h4>Corpo da avaliação</h4>
        
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

            <h4>Mecânica de jogo</h4>

            <div class="form-group row">
                <label for="objective" class="col-md-4 col-form-label text-md-right">{{ __('Objetivos') }}</label>
    
                <div class="col-md-6">
                    <input type="radio" name="objective" value="1" {{ old('objective') == 1 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="objective" value="2" {{ old('objective') == 2 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="objective" value="3" {{ old('objective') == 3 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="objective" value="4" {{ old('objective') == 4 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="objective" value="5" {{ old('objective') == 5 ? 'checked' : '' }} required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="challenge" class="col-md-4 col-form-label text-md-right">{{ __('Desafios') }}</label>
    
                <div class="col-md-6">
                    <input type="radio" name="challenge" value="1" {{ old('challenge') == 1 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="challenge" value="2" {{ old('challenge') == 2 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="challenge" value="3" {{ old('challenge') == 3 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="challenge" value="4" {{ old('challenge') == 4 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="challenge" value="5" {{ old('challenge') == 5 ? 'checked' : '' }} required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="rule" class="col-md-4 col-form-label text-md-right">{{ __('Regras') }}</label>
    
                <div class="col-md-6">
                    <input type="radio" name="rule" value="1" {{ old('rule') == 1 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="rule" value="2" {{ old('rule') == 2 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="rule" value="3" {{ old('rule') == 3 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="rule" value="4" {{ old('rule') == 4 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="rule" value="5" {{ old('rule') == 5 ? 'checked' : '' }} required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="control" class="col-md-4 col-form-label text-md-right">{{ __('Controles') }}</label>
    
                <div class="col-md-6">
                    <input type="radio" name="control" value="1" {{ old('control') == 1 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="control" value="2" {{ old('control') == 2 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="control" value="3" {{ old('control') == 3 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="control" value="4" {{ old('control') == 4 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="control" value="5" {{ old('control') == 5 ? 'checked' : '' }} required autofocus>
                </div>
            </div>

            <h4>História</h4>

            <div class="form-group row">
                <label for="scenario" class="col-md-4 col-form-label text-md-right">{{ __('Cenários') }}</label>
    
                <div class="col-md-6">
                    <input type="radio" name="scenario" value="1" {{ old('scenario') == 1 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="scenario" value="2" {{ old('scenario') == 2 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="scenario" value="3" {{ old('scenario') == 3 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="scenario" value="4" {{ old('scenario') == 4 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="scenario" value="5" {{ old('scenario') == 5 ? 'checked' : '' }} required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="characterBuilding" class="col-md-4 col-form-label text-md-right">{{ __('Construção de personagem') }}</label>
    
                <div class="col-md-6">
                    <input type="radio" name="characterBuilding" value="1" {{ old('characterBuilding') == 1 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="characterBuilding" value="2" {{ old('characterBuilding') == 2 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="characterBuilding" value="3" {{ old('characterBuilding') == 3 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="characterBuilding" value="4" {{ old('characterBuilding') == 4 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="characterBuilding" value="5" {{ old('characterBuilding') == 5 ? 'checked' : '' }} required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="plot" class="col-md-4 col-form-label text-md-right">{{ __('Enredo') }}</label>
    
                <div class="col-md-6">
                    <input type="radio" name="plot" value="1" {{ old('plot') == 1 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="plot" value="2" {{ old('plot') == 2 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="plot" value="3" {{ old('plot') == 3 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="plot" value="4" {{ old('plot') == 4 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="plot" value="5" {{ old('plot') == 5 ? 'checked' : '' }} required autofocus>
                </div>
            </div>

            <h4>Audio visual</h4>

            <div class="form-group row">
                <label for="graphic" class="col-md-4 col-form-label text-md-right">{{ __('Gráfico') }}</label>
    
                <div class="col-md-6">
                    <input type="radio" name="graphic" value="1" {{ old('graphic') == 1 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="graphic" value="2" {{ old('graphic') == 2 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="graphic" value="3" {{ old('graphic') == 3 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="graphic" value="4" {{ old('graphic') == 4 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="graphic" value="5" {{ old('graphic') == 5 ? 'checked' : '' }} required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="audio" class="col-md-4 col-form-label text-md-right">{{ __('Audio') }}</label>
    
                <div class="col-md-6">
                    <input type="radio" name="audio" value="1" {{ old('audio') == 1 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="audio" value="2" {{ old('audio') == 2 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="audio" value="3" {{ old('audio') == 3 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="audio" value="4" {{ old('audio') == 4 ? 'checked' : '' }} required autofocus>
                    <input type="radio" name="audio" value="5" {{ old('audio') == 5 ? 'checked' : '' }} required autofocus>
                </div>
            </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Avaliar jogo') }}
                </button>
                
                <a href="{{ route('games.show', $gameId) }}">Voltar</a>
            </div>
        </div>
    </form>
@endsection