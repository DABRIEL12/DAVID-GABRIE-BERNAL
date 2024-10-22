<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Infraccion;

class InfraccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
    
        $registros = DB::table('infracciones')
                        ->select('id', 'dni', 'fecha', 'placa', 'infraccion', 'descripcion')
                        ->where('dni', 'LIKE', '%'.$texto.'%')
                        ->orWhere('placa', 'LIKE', '%'.$texto.'%')
                        ->orWhere('infraccion', 'LIKE', '%'.$texto.'%')
                        ->orderBy('id', 'desc')
                        ->paginate(5);
        
        return view('infracciones.index', compact(['registros', 'texto']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $infraccion = new Infraccion(); 
        return view('infracciones.action', ['infraccion' => new Infraccion()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $registro = new Infraccion(); 
            $registro->dni = $request->input('dni');
            $registro->fecha = $request->input('fecha');
            $registro->placa = $request->input('placa');
            $registro->infraccion = $request->input('infraccion');
            $registro->descripcion = $request->input('descripcion');
            $registro->save();

            return redirect()->route('infracciones.index')->with('mensaje', 'Registro de infracción creado satisfactoriamente.');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('infracciones.index')->with('error', 'No se puede crear el registro. ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $infraccion = Infraccion::findOrFail($id);
        return view('infracciones.action', compact('infraccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $registro = Infraccion::findOrFail($id);
            $registro->dni = $request->input('dni');
            $registro->fecha = $request->input('fecha');
            $registro->placa = $request->input('placa');
            $registro->infraccion = $request->input('infraccion');
            $registro->descripcion = $request->input('descripcion');
            $registro->save();

            return redirect()->route('infracciones.index')->with('mensaje', 'Registro de infracción actualizado satisfactoriamente.');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('infracciones.index')->with('error', 'No se puede actualizar el registro. ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $registro = Infraccion::findOrFail($id);
            $registro->delete();
            return redirect()->route('infracciones.index')->with('mensaje', 'Registro de infracción eliminado correctamente.');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('infracciones.index')->with('error', 'No se puede eliminar el registro porque está siendo usado.');
        }
    }

}
