@extends('layouts.card-folder')

@section('card-title','Categorias')

@section('card-content')
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Criar categoria') }}
                </button>
                
                <a href="{{ url()->previous() }}">Voltar</a>
            </div>
        </div>
    </form>
@endsection