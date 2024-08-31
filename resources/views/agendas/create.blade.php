<h1>Crear Nueva Agenda</h1>

<form action="{{ route('agendas.store') }}" method="POST">
    @csrf
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha">

    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="hora">

    <!-- Añadir otros campos necesarios para la agenda -->

    <button type="submit">Guardar Agenda</button>
</form>
