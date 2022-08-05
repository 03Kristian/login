<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset}}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <form action="{{route('registrarse')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group pt-5">
                <input type="text" class="form-control" id="name" name="name">
                <label for="">Nombre</label>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="email">
                <label for="">Email</label>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <!-- <div class="form-group">
                <label for="">Verifique su Password</label>
                <input type="password" class="form-control" id="v_password" placeholder="v_password">
            </div> -->
            
            <div class="form-group">
                <label for="">Imagen del perfil</label>
                <input type="file" class="form-control" id="avatar" name="avatar" placeholder="logo">
            </div>

              <button type="submit" class="btn btn-primary">continuar</button>
        </form>
    </div>
</body>
</html>
