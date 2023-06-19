<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Gestão</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" >
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('/favicons/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('/favicons/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('/favicons/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ asset('/favicons/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('/favicons/safari-pinned-tab.svg') }}" color="#7952b3">
    <link rel="icon" href="{{ asset('/favicons/favicon.ico') }}">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>



</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">GESTÃO</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">SAIR</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
@include('components.navigation')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>
    </div>
</div>


<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('/js/Chart.min.js') }}" ></script>
<script src="{{ asset('/js/feather.min.js') }}" ></script>
<script src="{{ asset('/js/dashboard.js') }}"></script>
</body>
</html>
