@extends('layouts.base')

@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <div class="row">
      <div class="col">
          <h1>departamento Nuevo</h1>
          <br>
          <a class="btn btn-primary" href="/departamento">Regresa</a>
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
      <form class="form-horizontal" action="/departamento" method="POST">

        <div class="form-group">
          <label for="nombre">Nombre</label>
          <br>
          <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="dime el nombre" value="{{old('nombre')}}">
          <br>
          <label for="nombre">descrip</label>
          <br>
          <input type="text" class="form-control" id="descrip"  name="descrip" placeholder="que se hace aqui" value="{{old('descrip')}}">
          <br>

          <br>
          <button class="btn btn-primary" type="submit" name="Guarda">Guarda</button>
          <br>

          @csrf

        </div>
      </form>

    </div>

  </div>
@endsection
