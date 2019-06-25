@extends('layouts.base')

@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
      @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
      <form class="form-horizontal" action="/funcionario" method="POST">

        <div class="form-group">
          <label for="nombre">Nombre</label>
          <br>
          <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="dime el nombre" value="{{old('nombre')}}">
          <br>
          <label for="nombre">Fecha Ingreso</label>
          <br>
          <input type="date" class="form-control" id="fecha"  name="fecha" placeholder="dime cuando empezo" value="{{old('fecha')}}">
          <br>
          <label for="nombre">rut</label>
          <br>
          <input type="integer" class="form-control" id="rut"  name="rut" placeholder="dime dime el rut" value="{{old('rut')}}">
          <br>
          <div class="checkbox">
        <label>
        <input type="checkbox" data-toggle="toggle">
          Option one is enabled
          </label>
           </div>
          <input type="checkbox" checked data-toggle="toggle" data-on="Hombre" data-off="Mujer">
          <br>

          <div class="form-group">
            <label for="">departamento</label>
            <select class="form-control" name="departamento_id" id="departamento_id">
                 @foreach($departamentos as $departamento)
   <option value="{{$departamento['id']}}">{{$departamento['nombre']}}</option>
                 @endforeach
            </select>

          </div>




          <br>
          <button class="btn btn-primary" type="submit" name="Guarda">Guarda</button>
          <br>

          @csrf

        </div>
      </form>

    </div>

  </div>
@endsection
