@push('style')
    <style>
        .card{
            width: 200px;
            margin: 4px;
            height: 200px;
            border-radius:10%;
        }

        .card > a {
            color: white;
        }

        .card-header {
            height: 50px;
        }
    </style>
@endpush

<div class="card">
    <a href="{{ route('games.show',$item->id) }}">
        <div class="card-header">{{ $item->title }}</div>


<img src="{{ asset('images/covers/'.$item->cover) }}" width="100%" height="150px">
</a>
    <div class="card-body">

    </div>
</div>
