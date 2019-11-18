@push('style')
    <style>
        .links {
            width: 100%;
            margin-top: 0px;
            margin-bottom: 50px;
        }

        .links >div {
            background-color: lightgray;
        }

        .links > div > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
@endpush

<div class="links row justify-content-center text-center">
    <div class="col-md-2">
        <a href="{{ route('evaluations.list') }}">Avaliações</a>
    </div>

    <div class="col-md-2">
        <a href="{{ route('games.list') }}">Jogos</a>
    </div>

    <div class="col-md-2">
        <a href="">Usuários</a>
    </div>
</div>
