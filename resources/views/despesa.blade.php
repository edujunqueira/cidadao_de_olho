@extends('main')

@section('title', $despesa->data. ' - '.$deputado->nome.' -  Cidadão de Olho')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{ $deputado->nome }}</h1>
            <a href="/deputados/{{ $deputado->id }} }}"><button type="button" class="btn btn-dark alignleft"><i class="fa fa-reply" aria-hidden="true"></i> <strong>Voltar</strong></button></a>
                <div class="row mt-5">
                    <div class="col-12 mt-2">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Valor:
                                <span class="badge badge-pill">R$ {{ number_format ($despesa->valor, 2) }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Valor Reembolsado:
                                <span class="badge badge-pill">R$ {{ number_format ($despesa->valorReembolsado, 2) }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Emitente:
                                <span class="badge badge-pill">{{ $despesa->emitente }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Descrição:
                                <span class="badge badge-pill">{{ $despesa->descricao }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Data:
                                <span class="badge badge-pill">{{ $despesa->data }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </p>
        </div>
    </section>

@endsection
