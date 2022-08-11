<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script type="text/javascript" src="{{ asset('js/styles.js') }}"></script>
    <title>Dashboard</title>
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-expand-sm">
            <button type="button" class="btn btn-primary ">
                <span class="bi bi-grid-fill"></span>
            </button>
            <button type="button" class="btn d-inline-block ml-auto" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-expanded="false" aria-lable="Togglenavigation">
                <i class="navbar-toggler-icon" aria-controls="navbarSupportedContent"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-lg-center" id="navbarSupportedContent">
                <ul class="nav navbar-nav navbar-center ml-auto ">
                    <li class="navbar-item ">
                        <a href="/" class="nav-link"><i class="bi-house">Home</i></a>
                    </li>
                    <li class="navbar-item">
                        <i class="bi bi-box-arrow-right">Logout</i>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    <div id="content">
        <nav id="siderbar">

            <div class="siderbar-header">

                {{-- para ver nombre del ususario condiciono la imagen del usuario --}}
                @if (auth()->check())
                    <img id="logo-perfil" src="{{ asset(auth()->user()->avatar) }}"
                        class="img-fluid rounded-circle shadow-lg">
                    <p id="name">{{ auth()->user()->name }}</p>
                @endif
            </div>

            <ul class="list">
                <li>
                    <a data-toggle="collapse" data-target="#list1" aria-expanded="false" aria-lable="Togglenavigation">
                        Modulo 1
                    </a>
                    <ul class="collapse" id="list1">
                        <li><a href="#" class="text-none">Home</a></li>
                        <li><a href="#">Servicio1</a></li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#list2" aria-expanded="false" aria-lable="Togglenavigation">
                        Mesa de Votacion
                    </a>
                    <ul class="collapse" id="list2">
                        <li><a href="#">Agregar Miembro</a></li>
                        <li><a href="{{ route('chart') }}">Vista Grafica</a></li>
                    </ul>
                </li>
            </ul>

        </nav>
        <div class="col py-4 card">
            @yield('content')
        </div>
    </div>
</body>

</html>
