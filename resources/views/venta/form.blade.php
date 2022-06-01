<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('num_comprobante') }}
            {{ Form::text('num_comprobante', $venta->num_comprobante, ['class' => 'form-control' . ($errors->has('num_comprobante') ? ' is-invalid' : ''), 'placeholder' => 'Num Comprobante']) }}
            {!! $errors->first('num_comprobante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_hora') }}
            {{ Form::text('fecha_hora', $venta->fecha_hora, ['class' => 'form-control' . ($errors->has('fecha_hora') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Hora']) }}
            {!! $errors->first('fecha_hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('impuesto') }}
            {{ Form::text('impuesto', $venta->impuesto, ['class' => 'form-control' . ($errors->has('impuesto') ? ' is-invalid' : ''), 'placeholder' => 'Impuesto']) }}
            {!! $errors->first('impuesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_venta') }}
            {{ Form::text('total_venta', $venta->total_venta, ['class' => 'form-control' . ($errors->has('total_venta') ? ' is-invalid' : ''), 'placeholder' => 'Total Venta']) }}
            {!! $errors->first('total_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('persona_id') }}
            {{ Form::text('persona_id', $venta->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => 'Persona Id']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>