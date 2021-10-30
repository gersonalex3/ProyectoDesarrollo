@extends('layouts.app')

@section('template_title')
    Programacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Programaciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('programaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
                                        
										<th class="TitulosTabla">Torneo</th>
										<th class="TitulosTabla">No. de jornada</th>
										<th class="TitulosTabla">Fecha de juego</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($programaciones as $programacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $programacione->torneo->Nombre }}</td>
											<td>{{ $programacione->NumerodeJornada }}</td>
											<td>{{ $programacione->FechadeJuego }}</td>

                                            <td>
                                                <form action="{{ route('programaciones.destroy',$programacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('programaciones.show',$programacione->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('programaciones.edit',$programacione->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $programaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
