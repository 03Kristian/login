<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.css')}}" >

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div id="content-3" >
    <div id="vitrina" class="col container-fluid pt-4 card">
        <form action="{{route('registrarse')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="text-center text-white xl-2 p-2">Registrarse</h3>

            <div class="form-group pt-2">
                <label for="">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="nombre">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            
            <div class="form-group">
                <label for="">Imagen del perfil</label>
                <input type="file" class="form-control" id="avatar" name="avatar" placeholder="logo">
            </div>

            <button type="submit" class="btn-continuar btn-outline-warning">Guardar</button>
        
        </form>
    </div>
</div>
</body>
</html>
