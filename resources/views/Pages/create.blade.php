@extends('Admin.dashboard')

@section('content')
    
<div id="content-3" >
    <div id="vitrina" class="col container-fluid pt-4 card">
        <form action="{{route('registrarse')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="text-center text-white xl-2 p-2">Crear Jurado de Mesa</h3>
            <div class="form-group">
                <label for="">Identificacion</label>
                <input type="number" class="form-control" id="identificacion" name="identificacion" placeholder="identificacion">
            </div>

            <div class="form-group pt-2">
                <label for="">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
            </div>
            <div class="form-group pt-2">
                <label for="">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="nombre">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email">
            </div>
            
            <div class="form-group">
                <label for="">Lugar designado</label>
            <select id="id_mesajurado" name="id_mesajurado" class="form-select" aria-label="Default select example" required>
                <option selected>Elija una opcinon</option>
                @foreach ($lugar as $sitio)
                
                    <option value="{{$sitio->id}}">{{$sitio->sitio}}</option>
                
                @endforeach
              </select>
            </div>

            <button type="submit" class="btn btn-warning btn-outline-warning">Guardar</button>
        
        </form>
        <script type="text/javascript" src="{{ asset('js/styles.js') }}"></script>

    </div>
</div>
@endsection