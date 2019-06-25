@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Departamento</h1>
          <br>
          <a class="btn btn-primary" href="/departamento/create">Nuevo</a>
           <br>
          <table class="table">
              @foreach($departamento as $Departamento)
                  <tr>
                      <td><a href="/departamento/{{ $Departamento->id }}">{{ $Departamento->nombre }}</a></td>
                      <td> <a class="btn btn-primary" href="/departamento/{{$Departamento->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/departamento/{{$Departamento->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
