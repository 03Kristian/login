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
    <title>Salud - Dashboard</title>
</head>

<body>
    <div id="wrapper" class="px-4">
        <nav class="navbar navbar-expand-sm">
            <button type="button" class="btn btn-link " id="buttonsiderbar">
                
                <span class="h3 bi bi-grid-fill "></span>
            </button>
            <button type="button" class="btn d-inline-block d-lg-none ml-auto" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-expanded="false" aria-lable="Togglenavigation">
                <i class="navbar-toggler-icon" aria-controls="navbarSupportedContent"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav navbar-center ml-auto ">
                    <li class="navbar-item">
                        <a href="#" ><i class="bi-apple"></i> </a>
                    </li>
                    <li class="navbar-item">
                        <a><i class="bi bi-bag-plus"></i></a>
                        <i class="bi bi-gear-wide-connected">Opt</i>
                    </li>
                </ul>
            </div>
            <div class="btn-success">
                {{-- <a href="#" class="bi bi-x-lg"> Sing out</a> --}}
                <a href="{{ route('cierresesion') }}" class="miss">Cerrar Sesion</a>
            </div>
{{-- @include('sweetalert::alert'); --}}
            
        </nav>
    </div>
    <div id="content">
        <nav id="siderbar" class="float-start d-inline-block p-0 text-white">
            <div class="siderbar-header">
                {{-- para ver nombre del ususario --}}
                {{-- <p>{{auth()->user()->name}}</p> --}}
                {{-- condiciono la imagen del usuario
                @if (auth()->check())

                @endif --}}
                <img id="logo-perfil"
                    src="{{ url('https://media.revistagq.com/photos/5fc4d3e608c92a6bb64b9b83/1:1/w_960,c_limit/baby-yoda-nombre.jpg') }}"
                    class="img-fluid rounded-circle shadow-lg">

                    <img id="logo-perfil" src="" class="img-fluid rounded-circle shadow-lg">
                    <p id="name"></p>
                {{-- @endif --}}

            </div>

            <ul class="list">
                <li>
                    <a data-toggle="collapse" data-target="#list1" aria-expanded="false" aria-lable="Togglenavigation">
                        Abrir
                    </a>
                    <ul class="collapse" id="list1">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{route('sitios.index')}}">Sitios</a></li>
                        <li><a href="{{route('jurado.create')}}">Registro Jurado</a></li>

                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#list2" aria-expanded="false" aria-lable="Togglenavigation">
                        Puestos de Votacion
                    </a>
                    <ul class="collapse" id="list2">
                        <li><a href="{{ route('chart') }}">Chart</a></li>
                        <li><a href="#">Submenu2</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div id="pag1" class="m-auto row py-4 px-5 col-6 flex-lg-wrap justify-content-center">
        @yield('content')
    </div>

</body>

</html>