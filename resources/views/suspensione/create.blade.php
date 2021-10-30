@extends('layouts.app')

@section('template_title')
    Create Suspensione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="float-left">
                    <a class="btn btn-primary" href="{{ route('suspensione.index') }}"> Volver</a>
                </div>
                <br>
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Registro de Suspensiones</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('suspensione.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('suspensione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
