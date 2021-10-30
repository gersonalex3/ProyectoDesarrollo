@extends('layouts.app')

@section('template_title')
    {{ $tarjeta->name ?? 'Show Tarjeta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tarjeta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tarjeta.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tarjeta->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Decripcion:</strong>
                            {{ $tarjeta->Decripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Diassuspencion:</strong>
                            {{ $tarjeta->DiasSuspencion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
