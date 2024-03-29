@extends('layouts.app')

@section('template_title')
    Resultado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Resultados') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('resultado.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th class="TitulosTabla">Jornada</th>
										<th class="TitulosTabla">Torneo</th>
										<th class="TitulosTabla">Resultado</th>
										<th class="TitulosTabla">Gano</th>
										<th class="TitulosTabla">Perdio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($resultados as $resultado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $resultado->Programacione->NumerodeJornada }}</td>
											<td>{{ $resultado->Torneo->Nombre }}</td>
											<td>{{ $resultado->Resultado }}</td>
											<td>{{ $resultado->Equipo->NombreEquipo}}</td>
											

                                            <td>
                                                <form action="{{ route('resultado.destroy',$resultado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('resultado.show',$resultado->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('resultado.edit',$resultado->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $resultados->links() !!}
            </div>
        </div>
    </div>
@endsection
