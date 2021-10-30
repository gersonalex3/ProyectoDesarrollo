@extends('Layouts.Principal') 

@section('title', 'Login')

@section('content')
<body>
<div class="contenedor_Login">
        <form class="recuadro" method="POST" action="">
            <h1 class="titulo_Login">Login</h1>
            @csrf
            <input type="email" class="inputLogin"
            placeholder="Correo" id="email" name="email"> 

            <input type="password" class="inputLogin"
            placeholder="Contraseña" id="password" name="password"> 
            
            @error('message')
               <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{ $message }}</p> 
            @enderror

            <button type="submit" class="ingresarbtn">Ingresar</button>

        </form>    


</div>
</body>
@endsection