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

    @foreach ($allEvaluations as $evaluations)
        @include('_includes.evaluations.card-list',['evaluations' => $evaluations])
    @endforeach



</div>


@endsection
