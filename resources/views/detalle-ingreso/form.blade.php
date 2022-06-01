<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ingreso_id') }}
            {{ Form::text('ingreso_id', $detalleIngreso->ingreso_id, ['class' => 'form-control' . ($errors->has('ingreso_id') ? ' is-invalid' : ''), 'placeholder' => 'Ingreso Id']) }}
            {!! $errors->first('ingreso_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('articulo_id') }}
            {{ Form::text('articulo_id', $detalleIngreso->articulo_id, ['class' => 'form-control' . ($errors->has('articulo_id') ? ' is-invalid' : ''), 'placeholder' => 'Articulo Id']) }}
            {!! $errors->first('articulo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>