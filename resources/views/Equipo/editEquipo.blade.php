<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo WEB</title>
    <link rel="stylesheet" href="{{asset('css/Estilo.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/Estilo.css')}}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
  </head>
  <body class="body1">
    <div class="contenedor">
      <div class="navcontenedor">
        <nav class="navbar">
          <ul>
            <li class="nombreEmpresa"> Partidazo
            <a href="{{ route('torneo.index') }}" class="btnopciones" >Torneos</a>
             <a href="{{ url('jugadores') }}" class="btnopciones">Jugadores</a>
             <a href="{{ route('programaciones.index') }}" class="btnopciones" >Jornadas</a>
             <a href="{{ url('Equipo') }}" class="btnopciones">Equipos</a>
             <a href="{{ url('resultado') }}" class="btnopciones">Resultados</a>
             <a href="{{ url('suspensione') }}" class="btnopciones">Sanciones</a>
             <a href="{{ route('register.index') }}" class="btnopciones" >Registrar Usuario</a>
             <a href="{{ route('login.destroy') }}" class="btnLogin2">Salir</a>
            </li>  
          </ul>    
       </nav> 
      </div>  
    </div>
    <div>
      <br>
          </div>
    @yield('content')
<form action="{{ url('/Equipo/'.$equipo->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
       
  <body class="body1">
    <div class="contenedor">
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

</form>
</div > 