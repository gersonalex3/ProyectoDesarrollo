<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\User;
use App\Models\Torneo;
use CreateTipoUsuariosTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['equipos'] = Equipo::paginate(50);
       return view('Equipo.indexEquipo', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        $torneos = Torneo::all();
        return view('Equipo.createEquipo', compact(['usuarios','torneos']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $campos=[
           'Logo'=>'required|max:10000|mimes:jpeg,png,jpg',
           'IdUsuario'=>'required',
           
       ];
       
       $mensaje=['required'=>'El :attribute No tiene Datos'];

       $this->validate($request,$campos,$mensaje);

        $datosEquipo = request()->except('_token');
        

        if($request->hasFile('Logo')){
            $datosEquipo['Logo']=
            $request->file('Logo')->store('uploads','public');
        }

        Equipo::insert($datosEquipo);
        
        return redirect('Equipo')->with('mensaje','Equipo Registrado con Exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo=Equipo::findOrFail($id);
        $usuarios = User::all();
        $torneos = Torneo::all();
        return view('Equipo.editEquipo', compact('equipo', 'usuarios', 'torneos') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

  $campos=[
           
           'Logo'=>'required|max:10000|mimes:jpeg,png,jpg',
           'IdUsuario'=>'required',
           'Tor_IdTorneo'=>'required|string|max:100'
       ];
       
       $mensaje=['required'=>'El :attribute No tiene Datos'];

       $this->validate($request,$campos,$mensaje);


        $datosEquipo = request()->except(['_token','_method']);

        $equipo=Equipo::findOrFail($id);

                Storage::delete('public/'.$equipo->Logo);

                    if($request->hasFile('Logo')){
                     $datosEquipo['Logo']=
                     $request->file('Logo')->store('uploads','public');
                    }

        Equipo::where('id','=',$id)->update($datosEquipo);
        $usuarios = User::all();
        $torneos = Torneo::all();
        return redirect('Equipo')->with('mensaje', 'Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo=Equipo::findOrFail($id);

        if(Storage::delete('public/'.$equipo->Logo)){
            Equipo::destroy($id);
        }

       
        return redirect('Equipo')->with('mensaje', 'Equipo Eliminado');
    }
}
