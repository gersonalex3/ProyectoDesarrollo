@extends('layouts.app')

@section('template_title')
    Suspensione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Suspenciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('suspensione.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                <a></a>
                                <a href="{{ route('tarjeta.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Modificacion de Sanciones') }}
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
                                        
										<th class="TitulosTabla">Jugador</th>
										<th class="TitulosTabla">Jornada</th>
										<th class="TitulosTabla">Tarjeta</th>
										<th class="TitulosTabla">Motivo</th>
										<th class="TitulosTabla">Estatus</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suspensiones as $suspensione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $suspensione->Jugadore->Nombre }}</td>
											<td>{{ $suspensione->Programacione->NumerodeJornada }}</td>
											<td>{{ $suspensione->Tarjeta->Nombre }}</td>
											<td>{{ $suspensione->Motivo }}</td>
											<td>{{ $suspensione->Estatus }}</td>

                                            <td>
                                                <form action="{{ route('suspensione.destroy',$suspensione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('suspensione.show',$suspensione->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('suspensione.edit',$suspensione->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $suspensiones->links() !!}
            </div>
        </div>
    </div>
@endsection
