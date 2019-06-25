@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Funcionario Nuevo</h1>
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
          <label for="nombre">Nombre {{$funcionario->id}}</label>
          <br>
          <input type="text" class="form-control" id="nombre"  name="nombre" value="">
          <br>
          <button class="btn btn-primary" type="submit" name="Guarda">Guarda</button>
            @csrf
            @method('put')
        </div>
      </form>

    </div>

  </div>
@endsection
