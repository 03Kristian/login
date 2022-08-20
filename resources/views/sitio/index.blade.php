@extends('Admin.dashboard')

@section('content')

    <div class="container">
        <table class="table border ">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Departamentoss</th>
                <th scope="col">Acciones</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($sitios as $sitio)
              <tr>
                <th scope="row">{{$sitio->id}}</th>
                <td>{{$sitio->municipio}}</td>
                

                <td>
                  <form action="{{route('sitios.destroy', $sitio)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Eliminar</button>
                  </form>
                </td>
              
              </tr>
              @endforeach
             
            </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {{$sitios}}
          </div>
    </div>
@endsection