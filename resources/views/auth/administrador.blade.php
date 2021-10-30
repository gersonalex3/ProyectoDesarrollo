<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Alexis</title>
    <link rel="stylesheet" href="{{asset('css/Estilo.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/Estilo.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/Estilo.css')}}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
  </head>
  <body class="">
    <div class="contedor">
      <div class="navcontenedor">
    <nav class="navbar">
          <ul class="">
        
        <li class="nombreEmpresa"> Partidazos
        @if (auth()->check())
             <a href="{{ route('torneo.index') }}" class="btnopciones" >Torneos</a>
             <a href="{{ url('jugadores') }}" class="btnopciones">Jugadores</a>
             <a href="{{ route('programaciones.index') }}" class="btnopciones" >Jornadas</a>
             <a href="{{ url('Equipo') }}" class="btnopciones">Equipos</a>
             <a href="{{ url('resultado') }}" class="btnopciones">Resultados</a>
             <a href="{{ url('suspensione') }}" class="btnopciones">Sanciones</a>
             <a href="{{ route('register.index') }}" class="btnopciones" >Registrar Usuario</a>
             <a href="{{ route('login.destroy') }}" class="btnLogin2">Salir</a>
          </li>
        @endif
          </ul>
    </nav> 
    </div>
  </div> 
<div class="principal">
  <br>
  <h1 class="titulo_Login">Bienvenido <b>{{auth()->user()->name}}</h1>
</div>

  </body>
  <footer class="PiedePagina">
  <div class="textoFooter">© 2020 Copyright: Desarrollo WEB
  </div>
  </footer> 
</html>