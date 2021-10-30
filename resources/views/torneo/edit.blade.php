@extends('layouts.app')

@section('template_title')
    Update Torneo
@endsection
@section('content')
<br>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Torneo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('torneo.update', $torneo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('torneo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
