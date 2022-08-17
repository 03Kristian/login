@extends('Admin.dashboard')

@section('content')
    

    <div class="container border border-2 mt-5 w-50 ">
        <form class="mt-5 px-3" action="{{route('jurado.store')}}" method="post">
            @csrf
           {{-- <center> --}}
            <h3 class="m-auto mb-5 text-center">
                Registro Jurados
            </h3>
           {{-- </center> --}}
            <div class="mb-4  w-100 d-flex justify-content-center " >
                <input type="text" class="form-control rounded-pill w-50" placeholder="Identificacion" name="identificacion" id="identificacion">
         
            </div>
            <div class="mb-4  m-auto col-12 d-flex justify-content-center">
                
                
                <input type="text" class="form-control rounded-pill  w-50" placeholder="nombre" name="nombre">
             
            </div>
            <div class="mb-4  m-auto col-12 d-flex justify-content-center">
                
                
                <input type="text" class="form-control rounded-pill  w-50" placeholder="apellido" name="apellido">
             
            </div>
            <div class="mb-4  m-auto col-12 d-flex justify-content-center">
                
                
                <input type="text" class="form-control rounded-pill  w-50" placeholder="email" name="email">
             
            </div>
            
            
           
           
           <div class="mt-3  m-auto col-6  d-flex justify-content-center">
           <button class=" mb-3 btn btn-primary form-control rounded-pill w-50">Iniciar sesion</button>
           </div>
           {{-- <hr>

           <div class="mt-3  w-100  d-flex justify-content-center">
            <button class=" mb-3 btn btn-danger form-control rounded-pill w-50">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgb(252, 251, 251);transform: msFilter"><path d="M20.283 10.356h-8.327v3.451h4.792c-.446 2.193-2.313 3.453-4.792 3.453a5.27 5.27 0 0 1-5.279-5.28 5.27 5.27 0 0 1 5.279-5.279c1.259 0 2.397.447 3.29 1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233a8.908 8.908 0 0 0-8.934 8.934 8.907 8.907 0 0 0 8.934 8.934c4.467 0 8.529-3.249 8.529-8.934 0-.528-.081-1.097-.202-1.625z"></path></svg>
                Iniciar sesion con Google
            </button>
           

            </div>

            <div class="mt-3  w-100  d-flex justify-content-center">
                <button class=" mb-3 btn btn-primary form-control rounded-pill w-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgb(255, 255, 255);transform: msFilter"><path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path></svg>
                    Iniciar sesion con Facebook
                </button>
            </div> --}}
            {{-- <hr>

            <center><p>¿Olvidaste tu contraseña?</p></center>
            <center><p>Crear una cuenta</p></center> --}}

           
         
           
            
        </form>
    </div>
@endsection