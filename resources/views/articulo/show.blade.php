@extends('layouts.app')

@section('template_title')
    {{ $articulo->name ?? 'Show Articulo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Articulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('articulos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $articulo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $articulo->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $articulo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img src="/images/{{$articulo->imagen }}" width="60%">
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $articulo->categoria_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
