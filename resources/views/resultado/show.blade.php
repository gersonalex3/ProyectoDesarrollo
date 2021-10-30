@extends('layouts.app')

@section('template_title')
    {{ $resultado->name ?? 'Show Resultado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Resultado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('resultado.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Jornada:</strong>
                            {{ $resultado->Jornada_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Torneo:</strong>
                            {{ $resultado->Torneo_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Resultado:</strong>
                            {{ $resultado->Resultado }}
                        </div>
                        <div class="form-group">
                            <strong>Gano:</strong>
                            {{ $resultado->Gano }}
                        </div>
                        <div class="form-group">
                            <strong>Perdio:</strong>
                            {{ $resultado->Perdio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
