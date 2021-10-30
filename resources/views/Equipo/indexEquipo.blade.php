@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <h1 class="titulo_Login">Listado de Equipos</h1>
  <div class="btnNuevo">
    <a href="{{ url('Equipo/create') }}" class="btn-success">Registrar Equipo</a>
  </div>
  <br>
  
  <div class="alert alert-success alert-dismissible " role="alert">
    @if (Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
  </div>
  
  
  <table class="datagrid">
  
      <thead class="tablaT">
          <tr class="titulostabla">
              <th>ID</th>
              <th>Nombre de Equipo</th>
              <th >Logo</th>
              <th >Usuario</th>
              <th >Torneo</th>
              <th>Acciones</th>
          </tr>
      </thead>
  
      <tbody>
          @foreach ($equipos as $equipo )
              <tr>
              <td>{{ $equipo->id}}</td>
              <td>{{ $equipo->NombreEquipo}}</td>  
                        
              <td>
                  <img src="{{ asset('storage').'/'.$equipo->Logo }}" width="100px" alt="">
              </td>
  
              <td>{{ $equipo->IdUsuario}}</td>
              <td>{{ $equipo->Tor_IdTorneo}}</td>
              <td>
              
              <a href="{{ url('/Equipo/' .$equipo->id. '/edit') }}" class="btneditar">Editar</a>
              
              | 
                  
              <form action="{{ url('/Equipo/' .$equipo->id ) }}" method="post" class="formulario">
              @csrf
              {{ method_field('DELETE') }}
                  <input type="submit" onclick="return confirm('Seguro que lo quieres Borrar')" 
                  value="Borrar" class="btnBorrar">
              
              </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  @endsection