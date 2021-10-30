<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\User;

class RegisterController extends Controller
{
    public function create () {
        
        return view ('auth.register');
    }

    public function store(){

        $this ->validate(request(),['name'=> 'required','email'=> 'required|email','password'=> 'required']);    

        $user = User::create(request(['name', 'apellido', 'email', 'password', 'role']));

        auth()->login($user);
        
        return view('auth.administrador');
    }
}
