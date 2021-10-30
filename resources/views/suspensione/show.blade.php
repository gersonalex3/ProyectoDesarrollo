@extends('layouts.app')

@section('template_title')
    {{ $suspensione->name ?? 'Show Suspensione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vista de Sanciones</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suspensione.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Jugador Id:</strong>
                            {{ $suspensione->Jugador_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Jornada Id:</strong>
                            {{ $suspensione->Jornada_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Tarjeta Id:</strong>
                            {{ $suspensione->Tarjeta_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo:</strong>
                            {{ $suspensione->Motivo }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $suspensione->Estatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
