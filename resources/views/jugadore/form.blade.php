<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $jugadore->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido') }}
            {{ Form::text('Apellido', $jugadore->Apellido, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DPI') }}
            {{ Form::text('DPI', $jugadore->DPI, ['class' => 'form-control' . ($errors->has('DPI') ? ' is-invalid' : ''), 'placeholder' => 'Dpi']) }}
            {!! $errors->first('DPI', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FotoDPI') }}
            {{ Form::file('FotoDPI', $jugadore->FotoDPI, ['class' => 'form-control' . ($errors->has('FotoDPI') ? ' is-invalid' : ''), 'placeholder' => 'Fotodpi']) }}
            {!! $errors->first('FotoDPI', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumeroCamisola') }}
            {{ Form::text('NumeroCamisola', $jugadore->NumeroCamisola, ['class' => 'form-control' . ($errors->has('NumeroCamisola') ? ' is-invalid' : ''), 'placeholder' => 'Numerocamisola']) }}
            {!! $errors->first('NumeroCamisola', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechadeNacimiento') }}
            {{ Form::date('FechadeNacimiento', $jugadore->FechadeNacimiento, ['class' => 'form-control' . ($errors->has('FechadeNacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechadenacimiento']) }}
            {!! $errors->first('FechadeNacimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('equipos_id') }}
            {{ Form::select('equipos_id', $jugadores , $jugadore->equipos_id, ['class' => 'form-control' . ($errors->has('equipos_id') ? ' is-invalid' : ''), 'placeholder' => 'Equipos Id']) }}
            {!! $errors->first('equipos_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
<br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>