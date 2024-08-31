<h1>Editar Agenda</h1>

<form action="{{ route('agendas.update', $agenda->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" value="{{ $agenda->fecha }}">

    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="hora" value="{{ $agenda->hora }}">

    <!-- Añadir otros campos necesarios para la agenda -->

    <button type="submit">Actualizar Agenda</button>
</form>
