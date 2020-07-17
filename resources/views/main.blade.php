<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>

    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="/" class="navbar-brand d-flex align-items-center">
                <strong>CIDADÃO DE OLHO</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <body>

        @yield('content')
    </body>
    </main>

    <footer class="text-muted">
        <div class="container text-center">
            <p>Desafio Técnico - Codificar Sistemas Tecnológicos</p>
            <p><a href="https://github.com/edujunqueira" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> edujunqueira</a></p>
        </div>
    </footer>


</html>
