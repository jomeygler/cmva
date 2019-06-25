@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Confirma eliminar</h1>
          <br>
          <a class="btn btn-primary" href="/funcionario">Regresa</a>
           <br>
          <table class="table">
          </table>
      </div>
  </div>
  <div class="row">
    <div class="col">
      <form class="form-horizontal" action="/funcionario/{{$funcionario->id}}" method="POST">

        <div class="form-group">
          <button class="btn btn-primary" type="submit" name="elimina">Elilinar</button>
            @csrf
            @method('delete')
        </div>
      </form>

    </div>

  </div>
@endsection
