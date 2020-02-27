@push('style')
    <style>
        .card{
            width: 200px;
            margin: 4px;
            /*border-radius:10%;*/
        }

        .card > a {
            color: white;
            font-weight: bold;
        }

        .card-header {
            height: 50px;
        }

        .height-evaluation {
            height: 150px;
        }
    </style>
@endpush

<div class="card">
    <a href="{{ route('users.show',$item->id) }}">
        <div class="card-header">{{ $item->name }}</div>
    </a>


    <div class="card-body height-evaluation">
        <span><b>Email: </b></span>
        <span>{{ $item->email }}</span>
        <br>
        <span><b>Qtd. Avaliações: </b></span>
        <span>{{ $item->evaluations->count() }}</span>
    </div>
</div>
