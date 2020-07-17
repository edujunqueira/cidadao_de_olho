@extends('main')

@section('title', 'Despesas - Cidadão de Olho')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Despesas</h1>
            <p>
                <div class="row">
                    <div class="col-12">
                        @foreach ($info as $tab)
                            <div class="list-group" id="list-tab" role="tablist">
                                 <a class="list-group-item list-group-item-action btn" data-toggle="collapse" href="#collapse-{{$tab['nome']}}" role="button" aria-expanded="false" aria-controls="collapse-{{$tab['nome']}}">
                                    {{ $tab['desc'] }}
                                </a>
                                <div class="collapse" id="collapse-{{$tab['nome']}}">
                                    <div class="card card-body">
                                        @foreach ($tab['dado'] as $entry)
                                            <div id="textbox">
                                                @if ($tab['nome'] == 'maioresDespesas')
                                                    <p class="alignleft"><strong>Nome:</strong> {{ $entry->nome }}</p>
                                                @else
                                                    <p class="alignleft"><strong>Nome:</strong> <a href="/deputados/{{ $entry->id }}">{{ $entry->nome }}</a></p>
                                                @endif
                                                <p class="alignright"><strong> {{ $tab['qual']}}:</strong> R$ {{ number_format ($entry->valor, 2) }}</p>
                                                @if ($tab['data'])
                                                    <p class="alignright"><strong>Mês:</strong> {{ (date('M-Y', strtotime($entry->data))) }}&emsp;&emsp;&emsp;</p>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </p>
        </div>
    </section>

@endsection
