@extends('layouts.app')

@section('template_title')
    Jugadore
@endsection

@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Jugadores') }}
                        </span>

                         <div class="float-right">
                            <a href="{{ route('jugadores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Registrar Nuevo') }}
                            </a>
                          </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th class="TitulosTabla">No</th>
                                    
                                    <th class="TitulosTabla">Nombre</th>
                                    <th class="TitulosTabla">Apellido</th>
                                    <th class="TitulosTabla">Dpi</th>
                                    <th class="TitulosTabla">Foto DPI</th>
                                    <th class="TitulosTabla">Camisola</th>
                                    <th class="TitulosTabla">Fecha de nacimiento</th>
                                    <th class="TitulosTabla">Equipo</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jugadores as $jugadore)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $jugadore->Nombre }}</td>
                                        <td>{{ $jugadore->Apellido }}</td>
                                        <td>{{ $jugadore->DPI }}</td>
                                        <td>
                                        <img src="{{asset('storage').'/'.$jugadore->FotoDPI}}" alt="" width="">
                                        </td>
                                        <td>{{ $jugadore->NumeroCamisola }}</td>
                                        <td>{{ $jugadore->FechadeNacimiento }}</td>
                                        <td>{{ $jugadore->equipo->NombreEquipo}}</td>

                                        <td>
                                            <form action="{{ route('jugadores.destroy',$jugadore->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('jugadores.show',$jugadore->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('jugadores.edit',$jugadore->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $jugadores->links() !!}
        </div>
    </div>
</div>
@endsection
