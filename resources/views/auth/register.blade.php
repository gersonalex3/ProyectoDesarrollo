@extends('Layouts.app') 

@section('title', 'register')

@section('content')



<div class="contenedor_Login ">
    
        <form class="recuadro" method="POST" action="">
            <h1 class="titulo_Login">Registro</h1>
            @csrf
           
            <input type="text" class="inputLogin"
            placeholder="Nombre" id="name" name="name"> 

            <input type="text" class="inputLogin"
            placeholder="Apellido" id="apellido" name="apellido"> 

           
            <input type="email" class="inputLogin"
            placeholder="Correo" id="email" name="email"> 

          
            <input type="password" class="inputLogin"
            placeholder="Contraseña" id="password" name="password"> 

            <input type="password" class="inputLogin"
            placeholder="confirme su contraseña" id="password_confirmartion" name="password_confirmartion"> 
            
            <select name="role" id="role" placeholder="Seleccione una Clase" class="inputLogin">
                <option value="admin">Admin</option>
                <option value="standar" selected>Estandar</option>
              </select>
           
            <button type="submit" class="ingresarbtn">Registrarse</button>
        
        </select>
        </form>    


</div>

@endsection