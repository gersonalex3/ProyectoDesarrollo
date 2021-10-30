<div class="box box-info padding-1">
    <div class="box-body">
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('programaciones.index') }}"> Back</a>
        </div>
        <div class="form-group">
            {{ Form::label('Torneo') }}
            {{ Form::select('Torneo_id', $Torneos, $programacione->Torneo_id, ['class' => 'form-control' . ($errors->has('Torneo_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Torneo']) }}
            {!! $errors->first('Torneo_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de la Jornada') }}
            {{ Form::text('NumerodeJornada', $programacione->NumerodeJornada, ['class' => 'form-control' . ($errors->has('NumerodeJornada') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el Numero de la Jornada']) }}
            {!! $errors->first('NumerodeJornada', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Juego') }}
            {{ Form::date('FechadeJuego', $programacione->FechadeJuego, ['class' => 'form-control' . ($errors->has('FechadeJuego') ? ' is-invalid' : ''), 'placeholder' => 'Fechadejuego']) }}
            {!! $errors->first('FechadeJuego', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>