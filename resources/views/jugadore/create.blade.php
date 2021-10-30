@extends('layouts.app')

@section('template_title')
    Create Jugadore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
<br>
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Jugadoras</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('jugadores.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('jugadore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
