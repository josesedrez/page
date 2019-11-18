@push('style')
    <style>
        .game-list {
            justify-content: center;
            align-items: center;
            background-color: whitesmoke;
            border: 1px solid lightgray;
            margin-bottom: 50px;
        }
    </style>
@endpush


<div class="game-list row">
    @foreach ($games as $item)
        @include('_components.games.card', ['item' => $item])
    @endforeach
</div>
