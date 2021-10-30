<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $tarjeta->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Decripcion') }}
            {{ Form::text('Decripcion', $tarjeta->Decripcion, ['class' => 'form-control' . ($errors->has('Decripcion') ? ' is-invalid' : ''), 'placeholder' => 'Decripcion']) }}
            {!! $errors->first('Decripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dias de Suspencion') }}
            {{ Form::text('DiasSuspencion', $tarjeta->DiasSuspencion, ['class' => 'form-control' . ($errors->has('DiasSuspencion') ? ' is-invalid' : ''), 'placeholder' => 'Diassuspencion']) }}
            {!! $errors->first('DiasSuspencion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>