@extends('layouts.app')

@section('template_title')
    {{ $jugadore->name ?? 'Show Jugadore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Jugadore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('jugadores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $jugadore->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $jugadore->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Dpi:</strong>
                            {{ $jugadore->DPI }}
                        </div>
                        <div class="form-group">
                            <strong>Fotodpi:</strong>
                            <img src="{{asset('storage').'/'.$jugadore->FotoDPI}}" alt="" width="">
                        </div>
                        <div class="form-group">
                            <strong>Numerocamisola:</strong>
                            {{ $jugadore->NumeroCamisola }}
                        </div>
                        <div class="form-group">
                            <strong>Fechadenacimiento:</strong>
                            {{ $jugadore->FechadeNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Equipos Id:</strong>
                            {{ $jugadore->equipos_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
