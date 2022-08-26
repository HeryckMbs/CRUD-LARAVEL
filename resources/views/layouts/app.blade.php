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
    width: auto;
}
ul{
    list-style: none;

}
</style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark lighten-4 mb-4">

            <!-- Navbar brand -->
            <a class="navbar-brand" style="color: white" href="#">Gestão Condominial</a>

            <!-- Collapse button -->
            <button id="btn-menu" class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
                    aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
                <div class="animated-icon1"><span></span><span></span><span></span></div>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent20">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active bg-dark">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li  class=" bg-dark nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item bg-dark">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <!-- Links -->

            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->
        <main>
            @yield('content')
        </main>

    </div>
    <script>
        $(document).ready(function () {

            $('.first-button').on('click', function () {

                $('.animated-icon1').toggleClass('open');
            });
            $('.second-button').on('click', function () {

                $('.animated-icon2').toggleClass('open');
            });
            $('.third-button').on('click', function () {

                $('.animated-icon3').toggleClass('open');
            });
        });
    </script>
    <script src="https://kit.fontawesome.com/01659e7f91.js" crossorigin="anonymous"></script>
</body>

<footer>

</footer>
</html>
