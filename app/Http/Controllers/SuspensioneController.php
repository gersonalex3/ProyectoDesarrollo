<?php

namespace App\Http\Controllers;

use App\Models\Suspensione;
use App\Models\Tarjeta;
use App\Models\Jugadore;
use App\Models\Programacione;
use Illuminate\Http\Request;

/**
 * Class SuspensioneController
 * @package App\Http\Controllers
 */
class SuspensioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suspensiones = Suspensione::paginate();

        return view('suspensione.index', compact('suspensiones'))
            ->with('i', (request()->input('page', 1) - 1) * $suspensiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suspensione = new Suspensione();
        $tarjetas = Tarjeta::pluck('nombre','id');
        $jugadores = Jugadore::pluck('nombre','id');
        $jornadas = Programacione::pluck('NumerodeJornada','id');
        return view('suspensione.create', compact('suspensione','tarjetas','jugadores','jornadas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Suspensione::$rules);

        $suspensione = Suspensione::create($request->all());

        return redirect()->route('suspensione.index')
            ->with('success', 'Registro Guardado Con Exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suspensione = Suspensione::find($id);

        return view('suspensione.show', compact('suspensione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suspensione = Suspensione::find($id);
        $tarjetas = Tarjeta::pluck('nombre','id');
        $jugadores = Jugadore::pluck('nombre','id');
        $jornadas = Programacione::pluck('NumerodeJornada','id');
        return view('suspensione.edit', compact('suspensione','tarjetas','jugadores','jornadas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Suspensione $suspensione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suspensione $suspensione)
    {
        request()->validate(Suspensione::$rules);

        $suspensione->update($request->all());

        return redirect()->route('suspensione.index')
            ->with('success', 'Se han Actualizado Los datos');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $suspensione = Suspensione::find($id)->delete();

        return redirect()->route('suspensione.index')
            ->with('success', 'Registro Eliminado Correctamente');
    }
}
