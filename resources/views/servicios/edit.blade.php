<h1>Editar Servicio</h1>

<form action="{{ route('servicios.update', $servicio->idServicio) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nombreSer">Nombre del Servicio:</label>
    <input type="text" id="nombreSer" name="nombreSer" value="{{ $servicio->nombreSer }}">

    <label for="descripcionSer">Descripción:</label>
    <input type="text" id="descripcionSer" name="descripcionSer" value="{{ $servicio->descripcionSer }}">

    <button type="submit">Actualizar Servicio</button>
</form>
