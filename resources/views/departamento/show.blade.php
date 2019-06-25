@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>departamento {{$departamento->nombre}}</h1>
          <br>
          <a class="btn btn-primary" href="/departamento">Regresa</a>
           <br>
          <table class="table">
          </table>
      </div>
  </div>
  <div class="row">
    <div class="col">


<div class="row">
   <div class="col">
       <h3>Details</h3>
       <table class="table">
           @foreach(departaentos as $departamento)
               <tr>
                   <td>{{ $departamento->nombre }}</td>

               </tr>
           @endforeach
       </table>
   </div>
</div>
<div class="row">
   <div class="col">
       <a class="btn btn-primary" href="/departamento/{{ $departamento->id }}/create">Nuevo evento</a>
   </div>
</div>
@endsection
