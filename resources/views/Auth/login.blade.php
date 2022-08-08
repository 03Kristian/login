<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset}}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Document</title>
</head>

<body class="contenedor">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div id="content">
        <div class="col container-fluid pt-4 card shadow-lg" style="background-color: rgb(15, 221, 228);">
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <h3 class="text-center">Long in</h3>
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for=""">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                {{-- <div class="form-group">
                <label for="">Verifique su Password</label>
                <input type="password" class="form-control" id="v_password" placeholder="v_password">
              </div> --}}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn btn-outline-primary">continuar</button>
                </div>
                <script>
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Login',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
            </form>
        </div>
    </div>
</body>

</html>
