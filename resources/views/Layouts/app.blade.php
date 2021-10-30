<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Alexis</title>
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
    
  </body>
  <footer>
    <div class="border-gray-300 flex flex-col items-center bg-green-400	">
        <div class="sm:w-2/3 text-center py-6 bg-green-400	">
            <p class="text-sm text-white-700 font-bold mb-2 bg-green-400	 ">
                © 2021 Alexander Gerson Brandon
            </p>
        </div>
    </div>

</footer>
</html>