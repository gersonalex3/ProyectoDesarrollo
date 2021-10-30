<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
//use App\Http\Controllers\SessionController;
use App\Models\User;

class SessionController extends Controller
{
    public function create () {
        
        return view ('auth.login');
    }

    public function store() {//funciones guardadas para la pagina Login
            if (auth()->attempt(request(['email', 'password']))==false){
                return back()->withErrors([
                    'message' =>'tuvimos un error intentalo de nuevo',]);// si se valida mal lo lleva a Login nuevamente pero con errror
            } else {
                if(auth()->user()->role == 'admin'){
                    return view('auth.administrador');//aca va la del menu principal de usaurios
                } else {
                    return redirect()->to('/');
            }
        }
    }            
    public function destroy(){
        auth()->logout();
    return redirect ()->to('/');
    }

}
