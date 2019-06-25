@extends('layouts.base')

@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <div class="row">
      <div class="col">
          <h1>evento nuevo {{$funcionario->id}}</h1>
          <br>
          <a class="btn btn-primary" href="/funcionario/{{$funcionario->id}}/">Regresa a funcionario</a>
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
      <form class="form-horizontal" action="/funcionario/{{$funcionario->id}}/eventos" method="POST">

        <div class="form-group">
          <label for="nombre">descripcion</label>
          <br>
          <input type="text" class="form-control" id="descrip_ev"  name="descrip_ev" placeholder="dime el que paso" value="{{old('descrip_ev')}}">
          <br>
          <label for="nombre">Fecha Inicio</label>
          <br>
          <input type="date" class="form-control" id="fec_ini"  name="fec_ini" placeholder="dime cuando empezo" value="{{old('fec_ini')}}">
          <br>
          <label for="nombre">Fecha Fin</label>
          <br>
          <input type="date" class="form-control" id="fec_fin"  name="fec_fin" placeholder="dime cuando termina" value="{{old('fec_fin')}}">
          <br>

          <button class="btn btn-primary" type="submit" name="Guarda">Guarda</button>

          @csrf

        </div>
      </form>

    </div>

  </div>
@endsection
