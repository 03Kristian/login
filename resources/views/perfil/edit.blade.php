@extends('Admin.dashboard')

@section('content')
    

    <div class="container border border-2 mt-5 w-50 ">
        <form class="mt-5 px-3" action="{{route('jurado.update', $perfil)}}" method="post">
            @method('PUT')
            @csrf
           {{-- <center> --}}
            <h3 class="m-auto mb-5 text-center">
                Registro Jurados
            </h3>
           {{-- </center> --}}
            <div class="mb-4  w-100 d-flex justify-content-center " >
                <input type="text" class="form-control rounded-pill w-50"   value="{{$perfil->identificacion}}" placeholder="Identificacion" name="identificacion" id="identificacion">
         
            </div>
            <div class="mb-4  m-auto col-12 d-flex justify-content-center">
                
                
                <input type="text" class="form-control rounded-pill  w-50" placeholder="nombre" name="nombre" value="{{$perfil->nombre}}">
             
            </div>
            <div class="mb-4  m-auto col-12 d-flex justify-content-center">
                
                
                <input type="text" class="form-control rounded-pill  w-50" placeholder="apellido" name="apellido" value="{{$perfil->apellido}}">
             
            </div>
            <div class="mb-4  m-auto col-12 d-flex justify-content-center">
                
                
                <input type="text" class="form-control rounded-pill  w-50" placeholder="email" name="email" value="{{$perfil->email}}">
             
            </div>
            
            
           
           
           <div class="mt-3  m-auto col-6  d-flex justify-content-center">
           <button class=" mb-3 btn btn-primary form-control rounded-pill w-50">Iniciar sesion</button>
           </div>
     

           
         
           
            
        </form>
    </div>
@endsection