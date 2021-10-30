@extends('layouts.app')

@section('template_title')
    Torneo
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
                                {{ __('Lista de Torneos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('torneo.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th class="TitulosTabla">Nombre</th>
										<th class="TitulosTabla">Fechainicio</th>
										<th class="TitulosTabla">Fechafinal</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($torneos as $torneo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $torneo->Nombre }}</td>
											<td>{{ $torneo->FechaInicio }}</td>
											<td>{{ $torneo->FechaFinal }}</td>

                                            <td>
                                                <form action="{{ route('torneo.destroy',$torneo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('torneo.show',$torneo->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('torneo.edit',$torneo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $torneos->links() !!}
            </div>
        </div>
    </div>
@endsection
