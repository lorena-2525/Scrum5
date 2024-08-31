<h1>Crear Nuevo Servicio</h1>

<form action="{{ route('servicios.store') }}" method="POST">
    @csrf
    <label for="nombreSer">Nombre del Servicio:</label>
    <input type="text" id="nombreSer" name="nombreSer">

    <label for="descripcionSer">Descripción:</label>
    <input type="text" id="descripcionSer" name="descripcionSer">

    <button type="submit">Guardar Servicio</button>
</form>
