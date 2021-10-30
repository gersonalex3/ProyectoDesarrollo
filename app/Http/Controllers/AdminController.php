<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //controlador de los roles administradores 
    public function index(){
        return 'Admin';
    }

    public function create(){
        return view('auth.administrador');
    }
    
}
