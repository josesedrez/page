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
    <a href="{{ route('evaluations.show',$item->id) }}">
        <div class="card-header">{{ $item->title }}</div>
    </a>


    <div class="card-body">
        <span><b>Autor: </b></span>
        <span>{{ $item->user->name }}</span>
        <br>
        <span><b>Jogo: </b></span>
        <span>{{ $item->game->title }}</span>
        <br>
        <span><b>Nota: </b></span>
        <span>{{ $item->grade }}</span>
    </div>
</div>
