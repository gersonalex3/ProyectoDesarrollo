@extends('layouts.app')

@section('template_title')
    Update Suspensione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('suspensione.index') }}"> Volver</a>
                    </div>
                    <br>
                    <div class="card-header">
                        <span class="card-title">Edicion de Sanciones</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('suspensione.update', $suspensione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('suspensione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
