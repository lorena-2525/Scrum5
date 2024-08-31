<?php

namespace App\Http\Controllers;

use App\Models\Servicio;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::all();
    return view('servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $servicio = new Servicio();
        $servicio->nombreSer = $request->input('nombreSer');
        $servicio->descripcionSer = $request->input('descripcionSer');
        $servicio->save();
    
        return redirect()->route('servicios.index')->with('success', 'Servicio creado con éxito');
    }
    


    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $servicio = Servicio::findOrFail($id);
    return view('servicios.show', compact('servicio'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servicio = Servicio::findOrFail($id);
        return view('servicios.edit', compact('servicio'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->nombreSer = $request->input('nombreSer');
        $servicio->descripcionSer = $request->input('descripcionSer');
        $servicio->save();
    
        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado con éxito');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();
    
        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado con éxito');
    }
    
}
