@extends('main')

@section('title', $deputado->nome.' - Cidadão de Olho')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{ $deputado->nome }}</h1>
            <p class="lead text-muted">{{ $deputado->partido }}</p>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <a href="/{{ $from }}"><button type="button" class="btn btn-dark alignleft closeTop"><i class="fa fa-reply" aria-hidden="true"></i> <strong>Voltar</strong></button></a>
                @if (!$deputado->importado)
                    <div class="mt-5">
                        <div class="textbox center">
                            <p class="lead text-muted closeTop">Este deputado ainda não teve seus gastos importados. Deseja importá-los agora?</p>
                            <a href="/deputados/{{ $deputado->id }}/importar" class="btn btn-primary center buttonCenter">Importar gastos</a>
                        </div>
                    </div>
                @elseif ($count == 0)
                    <div class="mt-5">
                        <div class="textbox center closeTop">
                            <p class="lead text-muted">Este deputado não tem gastos cadastrados no sistema de Dados Abertos da Assembleia Legislativa.</p>
                        </div>
                    </div>
                @else
                    <div class="row closeTop">
                        <div class="col-7">
                            <div class="list-group mt-5" id="list-tab" role="tablist">
                                 @foreach ($despesasPorMes as $despesa)
                                    <a class="list-group-item list-group-item-action btn center" data-toggle="collapse" href="#collapse-{{ $despesa->data }}" role="button" aria-expanded="false" aria-controls="collapse-{{ $despesa->data }}">
                                        R$ {{ number_format ($despesa->valor, 2) }}
                                        <span class="badge badge-pill">{{ $despesa->data }}</span>
                                    </a>
                                    <div class="collapse" id="collapse-{{ $despesa->data }}">
                                        <div class="card card-body list-group">
                                            @foreach ($despesas as $desp)
                                                @if (date('m-Y', strtotime($desp->data)) == $despesa->data)
                                                    <a class="list-group-item-action center ml-2" data-toggle="list" id="list-{{$desp->id}}-list" href="#list-{{$desp->id}}" role="tab" aria-controls="{{$desp->id}}">
                                                        <div class="textbox">
                                                            <p class="alignleft"><strong>Gasto:</strong> R$ {{ number_format ($desp->valor, 2) }}</p>
                                                            <p class="alignright"><strong>Data:</strong> {{ (date('d-m-Y', strtotime($desp->data))) }}</p>
                                                            <p class="justify"><strong>Descrição:</strong> {{ $desp->descricao }}</p>
                                                        </div>
                                                    </a>
                                                    <hr class="ml-3"/>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="tab-content sticky mt-5" id="nav-tabContent">
                                @foreach ($despesas as $detalheDespesa)
                                    <div class="tab-pane fade" id="list-{{$detalheDespesa->id}}" role="tabpanel" aria-labelledby="list-{{$detalheDespesa->id}}-list">
                                        <ul class="tab-pain">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Valor:
                                                <span class="badge badge-pill">R$ {{ number_format ($detalheDespesa->valor, 2) }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Valor Reembolsado:
                                                <span class="badge badge-pill">R$ {{ number_format ($detalheDespesa->valorReembolsado, 2) }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Emitente:
                                                <span class="badge badge-pill">{{ $detalheDespesa->emitente }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Descrição:
                                                <span class="badge badge-pill">{{ $detalheDespesa->descricao }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Data:
                                                <span class="badge badge-pill">{{ $detalheDespesa->data }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Referência:
                                                <a href="/despesas/{{$detalheDespesa->id}}"><span class="badge badge-pill">{{ $detalheDespesa->id }}</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
