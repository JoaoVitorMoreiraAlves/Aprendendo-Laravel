<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Fica aguardando que as páginas que utilizem esse layout passe o titulo dinamicamente --}}
        <title>@yield('title')</title>

        <!-- Google Fontes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel='stylesheet' href='/css/styles.css'>
        
        <!-- JS da aplicação -->
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header >
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" alt="HDC Events">
                    </a>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">Criar Eventos</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>



        {{-- Fica aguardando que as páginas que utilizem esse layout passe o conteudo dinamicamente --}}
        @yield('content')

        <footer>
            <p>HDC Events &copy; 2026</p>
        </footer>
    </body>
</html>
