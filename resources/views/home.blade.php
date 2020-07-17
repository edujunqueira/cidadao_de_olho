@extends('main')

@section('title', 'Cidadão de Olho')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Cidadão de Olho</h1>
            <p class="lead text-muted">Sistema para acompanhar os gastos dos deputados estaduais do estado de Minas Gerais.</p>
            <p>
                <a href="/deputados" class="btn btn-primary my-2">Deputados</a>
                <a href="/despesas" class="btn btn-secondary my-2">Despesas</a>
            </p>
        </div>
    </section>

@endsection
