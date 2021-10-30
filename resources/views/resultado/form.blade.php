<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Jornada_Id') }}
            {{ Form::select('Jornada_Id', $jornadas , $resultado->Jornada_Id, ['class' => 'form-control' . ($errors->has('Jornada_Id') ? ' is-invalid' : ''), 'placeholder' => 'Jornada Id']) }}
            {!! $errors->first('Jornada_Id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Torneo_Id') }}
            {{ Form::select('Torneo_Id', $torneo ,$resultado->Torneo_Id, ['class' => 'form-control' . ($errors->has('Torneo_Id') ? ' is-invalid' : ''), 'placeholder' => 'Torneo Id']) }}
            {!! $errors->first('Torneo_Id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Resultado') }}
            {{ Form::text('Resultado', $resultado->Resultado, ['class' => 'form-control' . ($errors->has('Resultado') ? ' is-invalid' : ''), 'placeholder' => 'Resultado']) }}
            {!! $errors->first('Resultado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Gano') }}
            {{ Form::select('Gano', $equipo1 ,$resultado->Gano, ['class' => 'form-control' . ($errors->has('Gano') ? ' is-invalid' : ''), 'placeholder' => 'Gano']) }}
            {!! $errors->first('Gano', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Perdio') }}
            {{ Form::select('Perdio', $Equipo ,$resultado->Perdio, ['class' => 'form-control' . ($errors->has('Perdio') ? ' is-invalid' : ''), 'placeholder' => 'Perdio']) }}
            {!! $errors->first('Perdio', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>