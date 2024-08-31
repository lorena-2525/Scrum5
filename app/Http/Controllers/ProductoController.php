<?php

namespace App\Http\Controllers;

use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->codigoProducto = $request->input('codigoProducto');
        $producto->nombreProducto = $request->input('nombreProducto');
        $producto->descripcionProducto = $request->input('descripcionProducto');
        $producto->fechaVencProducto = $request->input('fechaVencProducto');
        $producto->save();

    return redirect()->route('productos.index')->with('success', 'Producto creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $producto = Producto::findOrFail($id);
    return view('productos.show', compact('producto'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
    return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->codigoProducto = $request->input('codigoProducto');
        $producto->nombreProducto = $request->input('nombreProducto');
        $producto->descripcionProducto = $request->input('descripcionProducto');
        $producto->fechaVencProducto = $request->input('fechaVencProducto');
        $producto->save();
    
        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
