<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Jugador') }}
            {{ Form::Select('Jugador_Id', $jugadores ,$suspensione->Jugador_Id, ['class' => 'form-control' . ($errors->has('Jugador_Id') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese al Jugador']) }}
            {!! $errors->first('Jugador_Id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Jornada') }}
            {{ Form::Select('Jornada_Id', $jornadas ,$suspensione->Jornada_Id, ['class' => 'form-control' . ($errors->has('Jornada_Id') ? ' is-invalid' : ''), 'placeholder' => 'Jornada']) }}
            {!! $errors->first('Jornada_Id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tarjeta') }}
            {{ Form::Select('Tarjeta_Id', $tarjetas ,$suspensione->Tarjeta_Id, ['class' => 'form-control' . ($errors->has('Tarjeta_Id') ? ' is-invalid' : ''), 'placeholder' => 'Tarjeta']) }}
            {!! $errors->first('Tarjeta_Id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Motivo') }}
            {{ Form::text('Motivo', $suspensione->Motivo, ['class' => 'form-control' . ($errors->has('Motivo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo']) }}
            {!! $errors->first('Motivo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estatus') }}
            {{ Form::text('Estatus', $suspensione->Estatus, ['class' => 'form-control' . ($errors->has('Estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
            {!! $errors->first('Estatus', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>