@extends('Admin.dashboard')

@section('content')
<div class="container">
    <table class="table border table-responsive ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Identificacion</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Email</th>
            <th scope="col">Acciones</th>


            
          </tr>
        </thead>
        <tbody>
          @foreach ($perfil as $i)
          <tr>
            <th scope="row">{{$i->id}}</th>
           
               <td>{{$i->identificacion}}</td>
               <td>{{$i->nombre}}</td>

                <td>{{$i->apellido}}</td>
                <td>{{$i->email}}</td>

                <td>
                  <a href="{{route('jurado.edit', $i)}}" class="btn btn-warning">Editar</a>
                  <form action="{{route('jurado.destroy', $i)}}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button class="btn btn-danger">Eliminar</button>

                  </form>

                </td>


        
          
          </tr>
          @endforeach           
          
         
        </tbody>
      </table>
      {{-- <div class="d-flex justify-content-center">
        {{$perfil}}
      </div> --}}
</div>
@endsection