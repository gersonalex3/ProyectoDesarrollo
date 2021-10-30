@extends('layouts.app')

@section('template_title')
    {{ $torneo->name ?? 'Show Torneo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos del Torneo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('torneo.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $torneo->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $torneo->FechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafinal:</strong>
                            {{ $torneo->FechaFinal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
