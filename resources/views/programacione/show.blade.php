@extends('layouts.app')

@section('template_title')
    {{ $programacione->name ?? 'Show Programacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos de la Programacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('programaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Torneo Id:</strong>
                            {{ $programacione->Torneo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Numerodejornada:</strong>
                            {{ $programacione->NumerodeJornada }}
                        </div>
                        <div class="form-group">
                            <strong>Fechadejuego:</strong>
                            {{ $programacione->FechadeJuego }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
