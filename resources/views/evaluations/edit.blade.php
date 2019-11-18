@extends('layouts.card-folder')

@section('card-title','Avaliações')

@section('card-content')
    <form method="POST" action="{{ route('evaluations.update',$evaluation) }}">
        @method('PUT')
        @csrf

        <input type="hidden" name="gameId" value="{{ $gameId }}">

        <h4>Corpo da avaliação</h4>

        <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>

                <div class="col-md-6">
                    <input id="title" type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ $errors->any() ? old('title'): $evaluation->title }}" required autofocus>

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
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" required autofocus>{{ $errors->any() ? old('description') : $evaluation->description }}</textarea>

                    @if ($errors->has('description'))
                        <span role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <h4>Mecânica de jogo</h4>

                    <div class="form-group row">
                        <label for="objective" class="col-md-4 col-form-label text-md-right">{{ __('Objetivos') }}</label>

                        <div class="col-md-6">
                            <input type="radio" name="objective" value="1" {{ $evaluation->gameMechanic->objective_grade == 1 && !$errors->any() || old('objective') == 1 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="objective" value="2" {{ $evaluation->gameMechanic->objective_grade == 2 && !$errors->any() || old('objective') == 2 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="objective" value="3" {{ $evaluation->gameMechanic->objective_grade == 3 && !$errors->any() || old('objective') == 3 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="objective" value="4" {{ $evaluation->gameMechanic->objective_grade == 4 && !$errors->any() || old('objective') == 4 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="objective" value="5" {{ $evaluation->gameMechanic->objective_grade == 5 && !$errors->any() || old('objective') == 5 ? 'checked' : '' }} required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="challenge" class="col-md-4 col-form-label text-md-right">{{ __('Desafios') }}</label>

                        <div class="col-md-6">
                            <input type="radio" name="challenge" value="1" {{ $evaluation->gameMechanic->challenge_grade == 1 && !$errors->any() || old('challenge') == 1 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="challenge" value="2" {{ $evaluation->gameMechanic->challenge_grade == 2 && !$errors->any() || old('challenge') == 2 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="challenge" value="3" {{ $evaluation->gameMechanic->challenge_grade == 3 && !$errors->any() || old('challenge') == 3 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="challenge" value="4" {{ $evaluation->gameMechanic->challenge_grade == 4 && !$errors->any() || old('challenge') == 4 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="challenge" value="5" {{ $evaluation->gameMechanic->challenge_grade == 5 && !$errors->any() || old('challenge') == 5 ? 'checked' : '' }} required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rule" class="col-md-4 col-form-label text-md-right">{{ __('Regras') }}</label>

                        <div class="col-md-6">
                            <input type="radio" name="rule" value="1" {{ $evaluation->gameMechanic->rule_grade == 1 && !$errors->any() || old('rule') == 1 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="rule" value="2" {{ $evaluation->gameMechanic->rule_grade == 2 && !$errors->any() || old('rule') == 2 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="rule" value="3" {{ $evaluation->gameMechanic->rule_grade == 3 && !$errors->any() || old('rule') == 3 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="rule" value="4" {{ $evaluation->gameMechanic->rule_grade == 4 && !$errors->any() || old('rule') == 4 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="rule" value="5" {{ $evaluation->gameMechanic->rule_grade == 5 && !$errors->any() || old('rule') == 5 ? 'checked' : '' }} required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="control" class="col-md-4 col-form-label text-md-right">{{ __('Controles') }}</label>

                        <div class="col-md-6">
                            <input type="radio" name="control" value="1" {{ $evaluation->gameMechanic->control_grade == 1 && !$errors->any() || old('control') == 1 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="control" value="2" {{ $evaluation->gameMechanic->control_grade == 2 && !$errors->any() || old('control') == 2 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="control" value="3" {{ $evaluation->gameMechanic->control_grade == 3 && !$errors->any() || old('control') == 3 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="control" value="4" {{ $evaluation->gameMechanic->control_grade == 4 && !$errors->any() || old('control') == 4 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="control" value="5" {{ $evaluation->gameMechanic->control_grade == 5 && !$errors->any() || old('control') == 5 ? 'checked' : '' }} required autofocus>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h4>História</h4>

                    <div class="form-group row">
                        <label for="scenario" class="col-md-4 col-form-label text-md-right">{{ __('Cenários') }}</label>

                        <div class="col-md-6">
                            <input type="radio" name="scenario" value="1" {{ $evaluation->story->scenario_grade == 1 && !$errors->any() || old('scenario') == 1 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="scenario" value="2" {{ $evaluation->story->scenario_grade == 2 && !$errors->any() || old('scenario') == 2 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="scenario" value="3" {{ $evaluation->story->scenario_grade == 3 && !$errors->any() || old('scenario') == 3 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="scenario" value="4" {{ $evaluation->story->scenario_grade == 4 && !$errors->any() || old('scenario') == 4 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="scenario" value="5" {{ $evaluation->story->scenario_grade == 5 && !$errors->any() || old('scenario') == 5 ? 'checked' : '' }} required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="characterBuilding" class="col-md-4 col-form-label text-md-right">{{ __('Construção personagem') }}</label>

                        <div class="col-md-6">
                            <input type="radio" name="characterBuilding" value="1" {{ $evaluation->story->character_building_grade == 1 && !$errors->any() || old('characterBuilding') == 1 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="characterBuilding" value="2" {{ $evaluation->story->character_building_grade == 2 && !$errors->any() || old('characterBuilding') == 2 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="characterBuilding" value="3" {{ $evaluation->story->character_building_grade == 3 && !$errors->any() || old('characterBuilding') == 3 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="characterBuilding" value="4" {{ $evaluation->story->character_building_grade == 4 && !$errors->any() || old('characterBuilding') == 4 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="characterBuilding" value="5" {{ $evaluation->story->character_building_grade == 5 && !$errors->any() || old('characterBuilding') == 5 ? 'checked' : '' }} required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="plot" class="col-md-4 col-form-label text-md-right">{{ __('Enredo') }}</label>

                        <div class="col-md-6">
                            <input type="radio" name="plot" value="1" {{ $evaluation->story->plot_grade == 1 && !$errors->any() || old('plot') == 1 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="plot" value="2" {{ $evaluation->story->plot_grade == 2 && !$errors->any() || old('plot') == 2 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="plot" value="3" {{ $evaluation->story->plot_grade == 3 && !$errors->any() || old('plot') == 3 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="plot" value="4" {{ $evaluation->story->plot_grade == 4 && !$errors->any() || old('plot') == 4 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="plot" value="5" {{ $evaluation->story->plot_grade == 5 && !$errors->any() || old('plot') == 5 ? 'checked' : '' }} required autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <h4>Audio visual</h4>

                    <div class="form-group row">
                        <label for="graphic" class="col-md-4 col-form-label text-md-right">{{ __('Gráfico') }}</label>

                        <div class="col-md-6">
                            <input type="radio" name="graphic" value="1" {{ $evaluation->audioVisual->graphic_grade == 1 && !$errors->any() || old('graphic') == 1 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="graphic" value="2" {{ $evaluation->audioVisual->graphic_grade == 2 && !$errors->any() || old('graphic') == 2 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="graphic" value="3" {{ $evaluation->audioVisual->graphic_grade == 3 && !$errors->any() || old('graphic') == 3 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="graphic" value="4" {{ $evaluation->audioVisual->graphic_grade == 4 && !$errors->any() || old('graphic') == 4 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="graphic" value="5" {{ $evaluation->audioVisual->graphic_grade == 5 && !$errors->any() || old('graphic') == 5 ? 'checked' : '' }} required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="audio" class="col-md-4 col-form-label text-md-right">{{ __('Audio') }}</label>

                        <div class="col-md-6">
                            <input type="radio" name="audio" value="1" {{ $evaluation->audioVisual->audio_grade == 1 && !$errors->any() || old('audio') == 1 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="audio" value="2" {{ $evaluation->audioVisual->audio_grade == 2 && !$errors->any() || old('audio') == 2 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="audio" value="3" {{ $evaluation->audioVisual->audio_grade == 3 && !$errors->any() || old('audio') == 3 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="audio" value="4" {{ $evaluation->audioVisual->audio_grade == 4 && !$errors->any() || old('audio') == 4 ? 'checked' : '' }} required autofocus>
                            <input type="radio" name="audio" value="5" {{ $evaluation->audioVisual->audio_grade == 5 && !$errors->any() || old('audio') == 5 ? 'checked' : '' }} required autofocus>
                        </div>
                    </div>
                </div>
            </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Avaliar jogo') }}
                </button>

                <a href="{{ url()->previous() }}">Voltar</a>
            </div>
        </div>
    </form>
@endsection
