@extends('layouts.card-folder')

@section('card-title','Usuário')

@section('card-content')
    <form enctype="multipart/form-data" method="POST" action="{{ route('users.updatePassword', $user->id) }}">
        @method('PUT')
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Senha atual') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ $errors->any() ? old('password'): '' }}" required autofocus>

                @if ($errors->has('password'))
                    <span role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                @if ($errors->has('wrongPassword'))
                    <span role="alert">
                        <strong>{{ $errors->first('wrongPassword') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Nova senha') }}</label>

            <div class="col-md-6">
                <input id="newPassword" type="password" name="newPassword" class="form-control{{ $errors->has('newPassword') ? ' is-invalid' : '' }}" value="{{ $errors->any() ? old('newPassword'): '' }}" required autofocus>

                @if ($errors->has('newPassword'))
                    <span role="alert">
                        <strong>{{ $errors->first('newPassword') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Editar perfil') }}
                    </button>

                    <a href="{{ url()->previous() }}">Voltar</a>
                </div>
            </div>
    </form>
@endsection
