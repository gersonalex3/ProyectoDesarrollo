@extends('layouts.app')
  <body class="body1">
    <div class="contenedor">
      <div class="navcontenedor">
        <nav class="navbar">
          <ul>
            <li class="nombreEmpresa">Partidazos
          </ul>    
       </nav> 
      </div >  
      <div class="recuadro">
        <h1 class="titulo_Login">Tu Equipo</h1>

      @if (count($errors)>0)
      <div class="alert alert-danger"  role="alert">
      <ul>
      @foreach ( $errors->all() as $error )
         <li> {{ $error }}</li>
      @endforeach
      </ul>
    </div>
      @endif

<input type="text" class="inputLogin"
placeholder="Nombre del Equipo" name="nombreEquipo" value="{{ $equipo->NombreEquipo }}" id="Nombreequipo" > 


<input type="file" class="inputLogin"
placeholder="Seleccione Imagen del Equipo" id="Logo" name="Logo" value="{{ $equipo->NombreEquipo }}"> 


<select name="IdUsuario" id="IdUsuario" name="inputuser" class="inputLogin" >
    <option value="">----------------Seleccione Usuario------------</option>
    @foreach ($usuarios as $usuario)
        <option value="{{$usuario['email']}}">{{$usuario['email']}}</option>
    @endforeach
</select>

<select name="Tor_IdTorneo" id="Tor_IdTorneo" name="inputuser" class="inputLogin" >
  <option value="">----------------Seleccione Usuario------------</option>
  @foreach ($torneos as $torneo)
      <option value="{{$torneo['Nombre']}}">{{$torneo['Nombre']}}</option>
  @endforeach
</select>

<button type="submit" class="ingresarbtn" value="Guardar datos" onclick="return confirm('Seguro que lo quieres Editar')">Guardar</button>