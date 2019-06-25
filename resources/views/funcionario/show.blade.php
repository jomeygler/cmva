@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Funcionario {{$persona->nombre}}</h1>
          <br>
          <a class="btn btn-primary" href="/funcionario">Regresa</a>
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
           @foreach($persona->eventos as $evento)
               <tr>
                   <td>{{ $evento->descrip_ev }}</td>
                   <td>{{ $evento->fec_ini }}</td>
                   <td>{{ $evento->fec_fin }}</td>
               </tr>
           @endforeach
       </table>
   </div>
</div>
<div class="row">
   <div class="col">
       <a class="btn btn-primary" href="/funcionario/{{ $persona->id }}/eventos/create">Nuevo evento</a>
   </div>
</div>
@endsection
