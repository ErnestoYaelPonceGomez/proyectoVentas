<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('venta_id') }}
            {{ Form::text('venta_id', $detalleVenta->venta_id, ['class' => 'form-control' . ($errors->has('venta_id') ? ' is-invalid' : ''), 'placeholder' => 'Venta Id']) }}
            {!! $errors->first('venta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('articulo_id') }}
            {{ Form::text('articulo_id', $detalleVenta->articulo_id, ['class' => 'form-control' . ($errors->has('articulo_id') ? ' is-invalid' : ''), 'placeholder' => 'Articulo Id']) }}
            {!! $errors->first('articulo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>