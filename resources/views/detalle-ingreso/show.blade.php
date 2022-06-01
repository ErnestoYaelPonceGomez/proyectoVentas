@extends('layouts.app')

@section('template_title')
    {{ $detalleIngreso->name ?? 'Show Detalle Ingreso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detalle Ingreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-ingresos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ingreso Id:</strong>
                            {{ $detalleIngreso->ingreso_id }}
                        </div>
                        <div class="form-group">
                            <strong>Articulo Id:</strong>
                            {{ $detalleIngreso->articulo_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
