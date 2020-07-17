@extends('main')

@section('title', $deputado->nome.' - Cidadão de Olho')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{ $deputado->nome }}</h1>
            <p class="lead text-muted">{{ $deputado->partido }}</p>
            <p>
                <div class="row">
                    <div class="col-12">
                        <div class="list-group" id="list-tab" role="tablist">
                             @foreach ($despesasPorMes as $despesa)
                                 <a class="list-group-item list-group-item-action btn" data-toggle="collapse" href="#collapse-{{ $despesa->data }}" role="button" aria-expanded="false" aria-controls="collapse-{{ $despesa->data }}">
                                    R$ {{ number_format ($despesa->valor, 2) }}
                                    <span class="badge badge-pill">{{ $despesa->data }}</span>
                                </a>
                                <div class="collapse" id="collapse-{{ $despesa->data }}">
                                    <div class="card card-body">
                                        @foreach ($despesas as $desp)
                                            @if (date('m-Y', strtotime($desp->data)) == $despesa->data)
                                                <div id="textbox">
                                                <p class="alignleft"><strong>Gasto:</strong> R$ {{ number_format ($desp->valor, 2) }}</p>
                                                <p class="alignright"><strong>Data:</strong> {{ (date('d-m-Y', strtotime($desp->data))) }}</p>

                                                <p class="justify"><strong>Descrição:</strong> {{ $desp->descricao }}</p>
                                                <br>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </p>
        </div>
    </section>

@endsection
