<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('bootstrap.js')}}" type="text/javascript "></script>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('app.css')}}">
    <title>{{ config('app.name', 'crud') }}</title>

    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<style>
body{
    background-color: #121212;
}
a{
    text-decoration: none;

}
ul{
    list-style: none;

}
</style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid" style="text-align: center">
                <a class="navbar-brand" >Gestão Condominial</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <button id="menuBtn">Menu</button>
            <div id="nav">
                    <ul id="menu">
                        <li><a href="#">Condomínios</a></li>
                        <li><a href="#">Usuários</a></li>
                        <li><a href="#">Reserva de espaços</a></li>
                        <li><a href="#">Sobre</a></li>
                    </ul>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>

    </div>
    <script>
        const btn = document.querySelector('#menuBtn');
        function menu()
        {
            let menu = document.querySelector('#nav');
            menu.classList.toggle('active')

        }
    </script>
    <script src="https://kit.fontawesome.com/01659e7f91.js" crossorigin="anonymous"></script>
</body>

<footer>

</footer>
</html>
