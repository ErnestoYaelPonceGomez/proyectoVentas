@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? 'Show Venta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Num Comprobante:</strong>
                            {{ $venta->num_comprobante }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $venta->fecha_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Impuesto:</strong>
                            {{ $venta->impuesto }}
                        </div>
                        <div class="form-group">
                            <strong>Total Venta:</strong>
                            {{ $venta->total_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $venta->persona_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
