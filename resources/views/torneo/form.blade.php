<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $torneo->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Inicio') }}
            {{ Form::date('FechaInicio', $torneo->FechaInicio, ['class' => 'form-control' . ($errors->has('FechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('FechaInicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Fin') }}
            {{ Form::date('FechaFinal', $torneo->FechaFinal, ['class' => 'form-control' . ($errors->has('FechaFinal') ? ' is-invalid' : ''), 'placeholder' => 'Fechafinal']) }}<br>
            {!! $errors->first('FechaFinal', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>