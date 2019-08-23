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
                      <td><div>
                      <form class="form-horizontal" action="/departamento/{{$Departamento->id}}" method="POST">
                        <div class="form-group">
                          <button class="btn btn-primary" type="submit" name="elimina">Elilinar burda</button>
                            @csrf
                            @method('delete')
                        </div>
                      </form>
                      </div></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
