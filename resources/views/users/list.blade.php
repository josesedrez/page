@extends('layouts.app')

@push('style')
    <style>
        .container {
            /* border: 1px solid black; */
        }
    </style>
@endpush

@section('menu')
    @include('_components.menu')
@endsection

@section('content')
<div class="container">

    @foreach ($allUsers as $users)
        @include('_includes.users.card-list',['users' => $users])
    @endforeach



</div>


@endsection
