@push('style')
    <style>
        .evaluation-list {
            justify-content: center;
            align-items: center;
            background-color: whitesmoke;
            border: 1px solid lightgray;
            margin-bottom: 50px;
        }
    </style>
@endpush


<div class="evaluation-list row">
    @foreach ($evaluations as $item)
        @include('_components.evaluations.card', ['item' => $item])
    @endforeach
</div>
