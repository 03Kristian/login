@extends('Admin.dashboard')

@section('content')
<div class="container">
    <table class="table border ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Identificacion</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Email</th>

            
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <th scope="row"></th>
            <td></td>
            

            <td>
             
            </td>
          
          </tr>
       
         
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        {{$sitios}}
      </div>
</div>
@endsection