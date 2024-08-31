@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Agendas</h1>
    <a href="{{ route('agendas.create') }}" class="btn btn-primary">Crear Nueva Agenda</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendas as $agenda)
                <tr>
                    <td>{{ $agenda->idAgenda }}</td>
                    <td>{{ $agenda->fechaAgenda }}</td>
                    <td>{{ $agenda->horaAgenda }}</td>
                    <td>
                        <a href="{{ route('agendas.show', $agenda->idAgenda) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('agendas.edit', $agenda->idAgenda) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('agendas.destroy', $agenda->idAgenda) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
