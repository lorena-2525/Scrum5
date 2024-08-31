<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;



class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::with(['usuario', 'estadoAgenda', 'mascota', 'valorServicio'])->get();
        return view('agendas.index', compact('agendas'));
    }
    

    public function create()

    {
        $usuarios = Usuario::all();  // Si tienes una tabla de usuarios
        $valorServicios = ValorServicio::all();  // Si tienes una tabla de servicios
        $mascotas = Mascota::all();  // Si tienes una tabla de mascotas
        return view('agendas.create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fechaAgenda' => 'required|date',
            'horaAgenda' => 'required|time',
            'usuario_idUsuario' => 'required|exists:usuario,idUsuario',
            'estadoAgenda_idEstadoAgenda' => 'required|exists:estadoAgenda,idEstadoAgenda',
            'mascota_idMascota' => 'required|exists:mascota,idMascota',
            'valorServicio_idValorServicio' => 'required|exists:valorServicio,idValorServicio',
        ]);

        Agenda::create($validatedData);
        return redirect()->route('agendas.index');
    }
    
    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('agendas.show', compact('agenda'));
    }
    
    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('agendas.edit', compact('agenda'));
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fechaAgenda' => 'required|date',
            'horaAgenda' => 'required|time',
            'usuario_idUsuario' => 'required|exists:usuario,idUsuario',
            'estadoAgenda_idEstadoAgenda' => 'required|exists:estadoAgenda,idEstadoAgenda',
            'mascota_idMascota' => 'required|exists:mascota,idMascota',
            'valorServicio_idValorServicio' => 'required|exists:valorServicio,idValorServicio',
        ]);

        $agenda = Agenda::findOrFail($id);
        $agenda->update($validatedData);
        return redirect()->route('agendas.index');
    }
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();
    
        return redirect()->route('agendas.index')->with('success', 'Agenda eliminada con éxito');
    }
    
    

}
