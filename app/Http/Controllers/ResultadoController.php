<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use App\Models\Equipo;
use App\Models\Programacione;
use App\Models\Torneo;

use Illuminate\Http\Request;

/**
 * Class ResultadoController
 * @package App\Http\Controllers
 */
class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultados = Resultado::paginate();

        return view('resultado.index', compact('resultados'))
            ->with('i', (request()->input('page', 1) - 1) * $resultados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resultado = new Resultado();
        $jornadas = Programacione::pluck('NumerodeJornada','id');
        $torneo = Torneo::pluck('Nombre','id');
        $equipo1 = Equipo::pluck('NombreEquipo','id');
        $Equipo = Equipo::pluck('NombreEquipo','id');
        
        return view('resultado.create', compact('resultado','jornadas','torneo','equipo1', 'Equipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Resultado::$rules);

        $resultado = Resultado::create($request->all());

        return redirect()->route('resultado.index')
            ->with('success', 'Registro Guardado Con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resultado = Resultado::find($id);

        return view('resultado.show', compact('resultado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resultado = Resultado::find($id);
        $jornadas = Programacione::pluck('NumerodeJornada','id');
        $torneo = Torneo::pluck('nombre','id');
        $equipo1 = Equipo::pluck('NombreEquipo','id');
        $Equipo = Equipo::pluck('NombreEquipo','id');
        return view('resultado.edit', compact('resultado','jornadas','torneo','equipo1','Equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Resultado $resultado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultado $resultado)
    {
        request()->validate(Resultado::$rules);

        $resultado->update($request->all());

        return redirect()->route('resultado.index')
            ->with('success', 'Registro Editado Con Exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $resultado = Resultado::find($id)->delete();

        return redirect()->route('resultado.index')
            ->with('success', 'Registro Eliminado');
    }
}
