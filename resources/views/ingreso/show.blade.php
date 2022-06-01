@extends('layouts.app')

@section('template_title')
    {{ $ingreso->name ?? 'Show Ingreso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ingreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Num Comprobante:</strong>
                            {{ $ingreso->num_comprobante }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $ingreso->fecha_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Impuesto:</strong>
                            {{ $ingreso->impuesto }}
                        </div>
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $ingreso->persona_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
