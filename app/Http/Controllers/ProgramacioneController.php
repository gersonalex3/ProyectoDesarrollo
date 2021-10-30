<?php

namespace App\Http\Controllers;

use App\Models\Programacione;
use App\Models\Torneo;
use Illuminate\Http\Request;

/**
 * Class ProgramacioneController
 * @package App\Http\Controllers
 */
class ProgramacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programaciones = Programacione::paginate();

        return view('programacione.index', compact('programaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $programaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programacione = new Programacione();
        $Torneos = Torneo::pluck('nombre', 'id' );
        return view('programacione.create', compact('programacione', 'Torneos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Programacione::$rules);

        $programacione = Programacione::create($request->all());

        return redirect()->route('programaciones.index')
            ->with('success', 'Programacion Creada Con Exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programacione = Programacione::find($id);

        return view('programacione.show', compact('programacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programacione = Programacione::find($id);
        $Torneos = Torneo::pluck('nombre', 'id' );
        return view('programacione.edit', compact('programacione','Torneos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Programacione $programacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programacione $programacione)
    {
        request()->validate(Programacione::$rules);

        $programacione->update($request->all());

        return redirect()->route('programaciones.index')
            ->with('success', 'Programacion Editada Con Exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $programacione = Programacione::find($id)->delete();

        return redirect()->route('programaciones.index')
            ->with('success', 'Programacion Borrada con Exito');
    }
}
