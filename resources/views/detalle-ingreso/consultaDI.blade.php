@extends('layouts.app')

@section('template_title')
    Detalle Ingreso
@endsection

@section('content')

<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID</label>
        <input type="integer" name="calificacion" class="form-control"
        value="{{$detalleIngreso->id}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Articulo</label>
        <input type="integer" name="calificacion" class="form-control"
        value="{{$articulos->nombre}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Precio</label>
        <input type="integer" name="calificacion" class="form-control"
        value="{{$articulos->precio}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Descripción</label>
        <input type="integer" name="calificacion" class="form-control"
        value="{{$articulos->descripcion}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Id ingreso</label>
        <input type="integer" name="calificacion" class="form-control"
        value="{{$ingresos->id}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Num comprobante</label>
        <input type="integer" name="calificacion" class="form-control"
        value="{{$ingresos->num_comprobante}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>


    <br>

@endsection('content')