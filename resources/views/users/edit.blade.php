@extends('layouts.card-folder')

@section('card-title','Usuário')

@section('card-content')
    <form enctype="multipart/form-data" method="POST" action="{{ route('users.update', $user->id) }}">
        @method('PUT')
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $errors->any() ? old('name'): $user->name }}" required autofocus>

                @if ($errors->has('name'))
                    <span role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $errors->any() ? old('email'): $user->email }}" required autofocus>

                @if ($errors->has('email'))
                    <span role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Imagem de Perfil') }}</label>

            <div class="col-md-6">
                <input type="file" name="profile">
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
