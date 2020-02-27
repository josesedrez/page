@push('style')
    <style>
        .card{
            width: 200px;
            margin: 4px;
        }

        .card > a {
            color: white;
            font-weight: bold;
        }

        .card-header {
            height: 60px;
        }
    </style>
@endpush

<div class="card">
    <a class="text-center" href="{{ route('games.show',$item->id) }}">
        <div class="card-header">{{ $item->title }}</div>

        <img src="{{ asset('images/covers/'.$item->cover) }}" width="100%" height="300px">
    </a>
</div>
