@extends('main')

@section('title', 'Cidadão de Olho')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{ $deputado->nome }}</h1>
            <p class="lead text-muted">{{ $deputado->partido }}</p>
            <p>
                <ul>
                @foreach ($despesas as $despesa)
                    <li class="list-item align-items-center d-flex justify-content-between">
                        R$ {{ number_format ($despesa->valor, 2) }}
                        <span class="badge badge-pill">{{ $despesa->data }}</span>
                    </li>
                @endforeach
                </ul>
            </p>
        </div>
    </section>

@endsection
