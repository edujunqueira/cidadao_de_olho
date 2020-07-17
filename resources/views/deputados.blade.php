@extends('main')

@section('title', 'Deputados - Cidadão de Olho')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Deputados</h1>
            <p class="lead text-muted">Situação dos deputados:
                @if ($deputados_bool)
                    <span class="green">importados</span>
                @else
                    <span class="red">não importados</span>
                @endif
            </p>
            <p>
                @if ($deputados_bool)
                    <a href="/importar/despesas" class="btn btn-primary my-2">Importar gastos</a>
                    <a href="/deletar" class="btn btn-secondary my-2">Re-importar</a>
                @else
                    <a href="/importar/deputados" class="btn btn-primary my-2">Importar</a>
                @endif
            </p>
            <ul>
            @if ($deputados_bool)
                @foreach ($deputados as $deputado)
                    <li class="list-item align-items-center d-flex justify-content-between">
                        <a href="/deputados/{{ $deputado->id }}">{{ $deputado->nome }}</a>
                        @if($deputado->importado)
                            <span class="badge badge-success badge-pill"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
                        @else
                            <a href="/importar/despesas/{{ $deputado->id }}" id="just_load_please"><span class="badge badge-primary badge-pill"><i class="fa fa-cloud-download" aria-hidden="true"></i></span></a>
                        @endif
                    </li>
                @endforeach
            @endif
            </ul>
        </div>
    </section>

@endsection
