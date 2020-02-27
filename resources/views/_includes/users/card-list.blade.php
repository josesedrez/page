@push('style')
    <style>
        .user-list {
            justify-content: center;
            align-items: center;
            background-color: whitesmoke;
            border: 1px solid lightgray;
            margin-bottom: 50px;
        }
    </style>
@endpush


<div class="user-list row">
    @foreach ($users as $item)
        @include('_components.users.card', ['item' => $item])
    @endforeach
</div>
