@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Funcionario</h1>
          <br>
          <a class="btn btn-primary" href="/funcionario/create">Nuevo</a>
           <br>
          <table class="table">
              @foreach($funcionarios as $Funcionario)
                  <tr>
                      <td><a href="/funcionario/{{ $Funcionario->id }}">{{ $Funcionario->nombre }}</a></td>
                      <td> <a class="btn btn-primary" href="/funcionario/{{$Funcionario->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/funcionario/{{$Funcionario->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
