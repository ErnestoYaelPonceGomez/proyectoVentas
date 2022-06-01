@extends('layouts.app')

@section('template_title')
    Create Detalle Ingreso
@endsection

@section('content')
<h2>Crear Registro</h2>

<form action="detalle_ingresos" method="POST">
  @csrf
  
  
  <div class="col-md-4 mb-3">
  <label for="inputState" class="form-label">Articulo</label>
  <select id="inputState" name="articulos" class="form-select">
      @foreach ($articulos as $articulo)
          <option value="{{$articulo->id}}">{{$articulo->nombre}}</option>  
      @endforeach
  </select>
  </div>

  <div class="col-md-4 mb-3">
  <label for="inputState" class="form-label">Ingresos</label>
  <select id="inputState" name="ingresos" class="form-select">
      @foreach ($ingresos as $ingreso)
          <option value="{{$ingreso->id}}">{{$ingreso->num_comprobante}}</option>  
      @endforeach
  </select>
  </div>
  
  <br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection('content')
